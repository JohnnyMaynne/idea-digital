<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsPagesTables extends Migration
{
    public function up()
    {
        Schema::create('contacts_pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 200)->nullable();
            $table->json('content')->nullable();
        });
    }

    public function down()
    {

        Schema::dropIfExists('contacts_pages');
    }
}
