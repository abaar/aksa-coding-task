<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ArticleCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_category',function(Blueprint $table){
            $table->increments('id');
            $table->integer('article_id')->unsigned()->references('id')->on('articles');
            $table->integer('category_id')->unsigned()->references('id')->on('categories');
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('article_category');
    }
}
