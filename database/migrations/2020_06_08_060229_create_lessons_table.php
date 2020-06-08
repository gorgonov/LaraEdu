<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained()->onDelete('cascade');;
            $table->string('name')->comment('Название урока');
            $table->text('description')->comment('Текстовое описание урока');
            $table->unsignedSmallInteger('duration_minutes')->comment('Продолжительность урока');
            $table->timestamps();
        });
    }

//CREATE TABLE `lesson` (
//`id` INT(11) NOT NULL AUTO_INCREMENT,
//`course_id` INT(11) NOT NULL COMMENT 'Идентификатор курса',
//`name` VARCHAR(150) NOT NULL COMMENT 'Название урока' COLLATE 'utf8_general_ci',
//`description` TEXT(65535) NOT NULL COMMENT 'Текстовое описание урока' COLLATE 'utf8_general_ci',
//`duration_minutes` INT(11) NOT NULL COMMENT 'Продолжительность (в минутах)',
//PRIMARY KEY (`id`) USING BTREE,
//INDEX `course_id` (`course_id`) USING BTREE,
//CONSTRAINT `lesson_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `yii2_starter`.`course` (`id`) ON UPDATE RESTRICT ON DELETE RESTRICT
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
        Schema::dropIfExists('lessons');
    }
}
