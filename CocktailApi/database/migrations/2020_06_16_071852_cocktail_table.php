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
          $table->id('ingredienten_id');
          $table->foreign('ingredienten_id')->references('id')->on('ingredienten');
          $table->id('benodigheden_id');
          $table->foreign('benodigheden_id')->references('id')->on('benodigheden');
          $table->id('instructies_id');
          $table->foreign('instructies_id')->references('id')->on('instructies');
          $table->string('image_location');


      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('cocktail', function(Blueprint $table){
        $table->dropForeign('cocktail_ingredienten_id_foreign');
        $table->dropForeign('cocktail_benodigheden_id_foreign');
        $table->dropForeign('cocktail_instructies_id_foreign');
    });
    Schema::dropIfExists('cocktail');
    }
}
