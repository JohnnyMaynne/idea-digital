<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanciesTables extends Migration
{
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            createDefaultTableFields($table);
            $table->string('title', 200)->nullable();
            $table->string('post', 200)->nullable();
            $table->string('type', 200)->nullable();
            $table->string('time', 200)->nullable();
            $table->text('description')->nullable();
            $table->integer('position')->unsigned()->nullable();
        });

        Schema::create('vacancy_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'vacancy');
        });


    }

    public function down()
    {

        Schema::dropIfExists('vacancy_slugs');
        Schema::dropIfExists('vacancies');
    }
}
