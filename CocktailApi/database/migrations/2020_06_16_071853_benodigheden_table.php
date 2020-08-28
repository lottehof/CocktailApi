<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BenodighedenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('benodigheden', function (Blueprint $table) {
          $table->id('id')->unique();
          $table->string('benodigheid');
          $table->foreignId('cocktail_id');
          $table->foreign('cocktail_id')->references('id')->on('cocktail');
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
      Schema::table('benodigheden', function($table){
          $table->dropForeign('benodigheden_cocktail_id_foreign');
        });
        Schema::dropIfExists('benodigheden');
    }
  }
