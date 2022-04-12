<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasesTables extends Migration
{
    public function up()
    {
        Schema::create('cases', function (Blueprint $table) {
            createDefaultTableFields($table);
            $table->string('title', 200)->nullable();
            $table->text('description')->nullable();
            $table->integer('position')->unsigned()->nullable();
             $table->timestamp('publish_start_date')->nullable();
             $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('case_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'case');
        });

        Schema::create('case_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'case');
        });
    }

    public function down()
    {
        Schema::dropIfExists('case_revisions');
        Schema::dropIfExists('case_slugs');
        Schema::dropIfExists('cases');
    }
}
