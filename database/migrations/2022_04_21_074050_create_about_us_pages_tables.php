<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsPagesTables extends Migration
{
    public function up()
    {
        Schema::create('about_us_pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 200)->nullable();
        });
    }

    public function down()
    {

        Schema::dropIfExists('about_us_pages');
    }
}
