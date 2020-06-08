<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentProgressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_progress', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');;
            $table->unsignedBigInteger('lesson_group_id')->comment('Идентификатор пройденного урока');
            $table->foreign('lesson_group_id')->references('id')->on('lesson_groups');

            $table->timestamps();
        });
    }
//CREATE TABLE `student_progress` (
//`id` INT(11) NOT NULL AUTO_INCREMENT,
//`student_id` INT(11) NOT NULL COMMENT 'Идентификатор пользователя (студента)',
//`lesson_group_id` INT(11) NOT NULL COMMENT 'Идентификатор пройденного урока',
//PRIMARY KEY (`id`) USING BTREE,
//INDEX `lesson_group_id` (`lesson_group_id`) USING BTREE,
//INDEX `student_id` (`student_id`) USING BTREE,
//CONSTRAINT `student_progress_ibfk_1` FOREIGN KEY (`lesson_group_id`) REFERENCES `yii2_starter`.`lesson_group` (`id`) ON UPDATE RESTRICT ON DELETE RESTRICT,
//CONSTRAINT `student_progress_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `yii2_starter`.`user` (`id`) ON UPDATE RESTRICT ON DELETE RESTRICT
//)
//COLLATE='utf8_general_ci'
//ENGINE=InnoDB
//;

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_progress');
    }
}
