<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksTables extends Migration
{
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            createDefaultTableFields($table);
            $table->string('title', 200)->nullable();
            $table->text('description',1000)->nullable();
            $table->integer('position')->unsigned()->nullable();
             $table->timestamp('publish_start_date')->nullable();
             $table->timestamp('publish_end_date')->nullable();
        });

        Schema::create('work_slugs', function (Blueprint $table) {
            createDefaultSlugsTableFields($table, 'work');
        });

        Schema::create('work_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'work');
        });
    }

    public function down()
    {
        Schema::dropIfExists('work_revisions');
        Schema::dropIfExists('work_slugs');
        Schema::dropIfExists('works');
    }
}
