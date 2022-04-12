<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTables extends Migration
{
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            createDefaultTableFields($table);
            $table->string('title', 200)->nullable();
            $table->integer('position')->unsigned()->nullable();
        });
    }

    public function down()
    {

        Schema::dropIfExists('clients');
    }
}
