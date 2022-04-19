<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTables extends Migration
{
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            createDefaultTableFields($table);
            $table->string('title', 200)->nullable();
            $table->string('description',200)->nullable();
            $table->integer('position')->unsigned()->nullable();
        });
    }


    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
