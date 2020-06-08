<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->timestamp('payed_at')->nullable()->comment('Дата и время платежа');
            $table->timestamp('approved_at')->nullable()->comment('Дата и время подтверждения платежа');
            $table->unsignedBigInteger('approved_by')->nullable()->comment('Ссылка на пользователя, подтвердившего платеж');
            $table->string('path_of_check')->nullable()->comment('Путь к скриншоту чека');

            $table->integer('sum')->nullable()->comment('Сумма платежа');
            $table->timestamps();

            $table->foreignId('user_id')->constrained()->onDelete('cascade');
//            $table->unsignedBigInteger('user_id')->comment('Ссылка на пользователя-cтудента');
//            $table->foreign('user_id')->references('id')->on('users');

//            $table->unsignedBigInteger('course_group_id')->comment('Ссылка на группу, в которую он записывается');
//            $table->foreign('course_group_id')->references('id')->on('course_group');
            $table->foreignId('course_group_id')->constrained()->onDelete('cascade');

            $table->index('approved_by');
            $table->index('user_id');
            $table->index('course_group_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
