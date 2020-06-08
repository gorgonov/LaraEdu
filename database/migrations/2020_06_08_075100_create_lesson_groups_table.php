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
