<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *用户
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('id');
            $table->string('email')->unique();//->default('')->comment('用户邮箱');
            $table->string('name');//->default('')->comment('用户名');
            $table->string('password');//->default('')->comment('用户密码');
            $table->string('img');//->default('')->comment('用户头像');
            $table->timestamps();//->comment('用户创建时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
