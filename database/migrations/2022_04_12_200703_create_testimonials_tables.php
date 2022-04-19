<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonialsTables extends Migration
{
    public function up()
    {
        Schema::create('testimonials', function (Blueprint $table) {
            createDefaultTableFields($table);
            $table->string('name', 200)->nullable();
            $table->string('post', 200)->nullable();
            $table->integer('work_id')->nullable();
            $table->text('text', 1000)->nullable();
            $table->integer('position')->unsigned()->nullable();
        });
    }

    public function down()
    {

        Schema::dropIfExists('testimonials');
    }
}
