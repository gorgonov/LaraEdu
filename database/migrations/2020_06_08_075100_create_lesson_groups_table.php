<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lesson_groups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lesson_id')->constrained()->onDelete('cascade');;
            $table->timestamp('date_start')->comment('Дата начала');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');; // идентификатор учителя

            $table->unsignedBigInteger('group_id')->comment('Ссылка на учебную группу');
            $table->foreign('group_id')->references('id')->on('course_groups');

            $table->timestamps();
        });
    }

//CREATE TABLE `lesson_group` (
//`id` INT(11) NOT NULL AUTO_INCREMENT,
//`group_id` INT(11) NOT NULL COMMENT 'Идентификатор группы',
//`lesson_id` INT(11) NOT NULL COMMENT 'Идентификатор урока',
//`time_start` DATETIME NOT NULL COMMENT 'Время начала урока',
//`teacher_id` INT(11) NOT NULL COMMENT 'Идентификатор учителя',
//PRIMARY KEY (`id`) USING BTREE,
//INDEX `teacher_id` (`teacher_id`) USING BTREE,
//INDEX `group_id` (`group_id`) USING BTREE,
//INDEX `lesson_id` (`lesson_id`) USING BTREE,
//CONSTRAINT `lesson_group_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `yii2_starter`.`user` (`id`) ON UPDATE RESTRICT ON DELETE RESTRICT,
//CONSTRAINT `lesson_group_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `yii2_starter`.`course_group` (`id`) ON UPDATE RESTRICT ON DELETE RESTRICT,
//CONSTRAINT `lesson_group_ibfk_3` FOREIGN KEY (`lesson_id`) REFERENCES `yii2_starter`.`lesson` (`id`) ON UPDATE RESTRICT ON DELETE RESTRICT
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
        Schema::dropIfExists('lesson_groups');
    }
}
