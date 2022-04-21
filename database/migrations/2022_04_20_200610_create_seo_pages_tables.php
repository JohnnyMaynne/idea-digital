<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeoPagesTables extends Migration
{
    public function up()
    {
        Schema::create('seo_pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 200)->nullable();
            $table->text('description', 1000)->nullable();
            $table->json('steps')->nullable();
        });

        Schema::create('seo_page_revisions', function (Blueprint $table) {
            createDefaultRevisionsTableFields($table, 'seo_page');
        });
    }

    public function down()
    {
        Schema::dropIfExists('seo_page_revisions');
        Schema::dropIfExists('seo_pages');
    }
}
