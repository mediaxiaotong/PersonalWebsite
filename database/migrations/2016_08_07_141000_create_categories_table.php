<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *文章分类
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('id');
            $table->string('name');//->default('')->comment('分类名');
            $table->string('title');//->default('')->comment('分类标题');
            $table->string('keyword');//->default('')->comment('分类关键字');
            $table->string('description');//->default('')->comment('分类描述');
            $table->integer('view');//->default(0)->comment('分类查看次数');
            $table->integer('order');//->default(0)->comment('分类排序');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('categories');
    }
}
