<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogPagesTables extends Migration
{
    public function up()
    {
        Schema::create('blog_pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 200)->nullable();
            $table->json('content')->nullable();
        });
    }

    public function down()
    {

        Schema::dropIfExists('blog_pages');
    }
}
