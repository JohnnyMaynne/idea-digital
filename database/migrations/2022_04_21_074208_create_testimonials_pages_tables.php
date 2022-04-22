<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonialsPagesTables extends Migration
{
    public function up()
    {
        Schema::create('testimonials_pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 200)->nullable();
            $table->json('content')->nullable();
        });
    }

    public function down()
    {

        Schema::dropIfExists('testimonials_pages');
    }
}
