<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150)->comment('Название курса');
            $table->text('description')->comment('Описание курса');
            $table->integer('price')->comment('Стоимость');
            $table->smallInteger('lesson_count')->comment('Количество занятий');
            $table->smallInteger('difficult')->comment('Степень сложности (от 1 до 3)');
            $table->string('image_path')->nullable()->comment('Фоновая картинка');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
