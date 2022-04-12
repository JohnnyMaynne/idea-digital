<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTables extends Migration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            createDefaultTableFields($table);
            $table->string('name', 200)->nullable();
            $table->string('email', 200)->nullable();
            $table->text('comment', 1000)->nullable();
            $table->integer('position')->unsigned()->nullable();
            $table->string('commentable_type',200)->nullable();
            $table->integer('commentable_id')->nullable();
            $table->nestedSet();
        });
    }

    public function down()
    {

        Schema::dropIfExists('comments');
    }
}
