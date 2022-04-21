<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomePagesTables extends Migration
{
    public function up()
    {
        Schema::create('home_pages', function (Blueprint $table) {
            createDefaultTableFields($table);
            $table->string('title', 200)->nullable();
        });
    }

    public function down()
    {

        Schema::dropIfExists('home_pages');
    }
}
