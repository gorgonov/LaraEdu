<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name', 64);
            $table->string('last_name',64);
            $table->smallInteger('status');
            $table->smallInteger('role');
            $table->string('avatar',250)->nullable();
            $table->string('city',50);
//            $table->softDeletes(); // deleted_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['first_name', 'last_name', 'status', 'avatar','city','role']);
//            $table->softDeletes(); // deleted_at
        });
    }
}
