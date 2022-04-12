<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTables extends Migration
{
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            createDefaultTableFields($table);
            $table->string('question', 200)->nullable();
            $table->text('answer',1000)->nullable();
            $table->integer('position')->unsigned()->nullable();
        });
    }

    public function down()
    {

        Schema::dropIfExists('questions');
    }
}
