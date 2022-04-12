<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTables extends Migration
{
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            createDefaultTableFields($table);
            $table->string('title', 200)->nullable();
            $table->string('authorable_type')->nullable();
            $table->integer('authorable_id')->nullable();
            $table->integer('position')->unsigned()->nullable();
        });

        Schema::create('author_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'author');
        });


    }

    public function down()
    {

        Schema::dropIfExists('author_slugs');
        Schema::dropIfExists('authors');
    }
}
