<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CocktailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('cocktail', function (Blueprint $table) {
          $table->id('id')->unique();
          $table->string('naam');
          $table->integer('sterkte');
          $table->string('image_location')->nullable();
          $table->timestamp('created_at')->nullable();
          $table->timestamp('updated_at')->nullable();




      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    Schema::dropIfExists('cocktail');
    }
}
