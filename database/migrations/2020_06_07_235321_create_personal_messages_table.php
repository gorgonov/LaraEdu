<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_messages', function (Blueprint $table) {
            $table->id();
            $table->unsignedDouble('from_user_id')->comment('Отправитель сообщения');
            $table->unsignedDouble('to_user_id')->comment('Получатель сообщения');
            $table->text('text')->comment('Текст сообщения');
            $table->boolean('is_new')->default(true)->comment('Новое сообщение (не прочитано получателем)');
            $table->smallInteger('important_state')->default(1)->comment('Важность сообщения)');
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
        Schema::dropIfExists('personal_messages');
    }
}
