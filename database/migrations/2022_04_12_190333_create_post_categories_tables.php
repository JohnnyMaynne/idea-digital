<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostCategoriesTables extends Migration
{
    public function up()
    {
        Schema::create('post_categories', function (Blueprint $table) {
            createDefaultTableFields($table);
            $table->string('title', 200)->nullable();
            $table->integer('position')->unsigned()->nullable();
        });

        Schema::create('post_category_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'post_category');
        });


    }

    public function down()
    {

        Schema::dropIfExists('post_category_slugs');
        Schema::dropIfExists('post_categories');
    }
}
