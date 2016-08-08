<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *网站配置
     * @return void
     */
    public function up()
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('id');
            $table->string('name');//->default('')->comment('配置时调用的变量名');
            $table->string('title');//->default('')->comment('配置标题');
            $table->text('content');//->default('')->comment('配置内容');
            $table->string('field_type');//->default('')->comment('字段类型');
            $table->string('field_value');//->default('')->comment('类型值');
            $table->string('tips');//->default('')->comment('配置描述');
            $table->integer('order');//->default(0)->comment('配置排序');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('configs');
    }
}
