<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('scripts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('category_id');

            $table->string('title');
            $table->string('slug')->unique();
            $table->text('excerpt');
            
            // tags specific to the category
            // views
            // rating

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('scripts');
    }
};
