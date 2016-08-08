<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *文章
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->increments('id');
            $table->string('title');//->default('')->comment('文章标题');
            $table->string('tag');//->default('')->comment('文章标签');
            $table->string('description');//->default('')->comment('文章描述');
            $table->string('thumb');//->default('')->comment('文章缩略图');
            $table->text('content');//->default('')->comment('文章内容');
            $table->string('editor');//->default('')->comment('文章编辑者');
            $table->integer('view');//->default(0)->comment('文章查看次数');
            $table->integer('cate_id');//->default(0)->comment('文章分类');
            $table->timestamps();//->comment('文章创建时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('articles');
    }
}
