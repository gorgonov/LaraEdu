<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_groups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained()->onDelete('cascade');;
            $table->timestamp('date_start')->comment('Дата начала');
            $table->string('comment')->nullable()->comment('Комментарий (необязательное поле');

//            $table->unsignedBigInteger('group_id')->comment('Ссылка на учебную группу');
//            $table->foreign('group_id')->references('id')->on('course_groups');

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
        Schema::dropIfExists('course_groups');
    }
}
