<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IngredientenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('ingredienten', function (Blueprint $table) {
              $table->integer('id')->unique();
              $table->string('ingredient');
              $table->foreignId('cocktail_id');
              $table->foreign('cocktail_id')->references('id')->on('cocktail');
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('ingredienten', function($table){
          $table->dropForeign('ingredienten_cocktail_id_foreign');
        });
        Schema::dropIfExists('ingredienten');


    }
}
