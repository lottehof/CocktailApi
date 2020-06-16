<?php

use Illuminate\Database\Seeder;

class CocktailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('cocktail')->insert([
      'id' =>  '1',
      'naam' => '4th of July',
      'sterkte' => 21,
      'ingredienten_id' => 1,
      'benodigheden_id' => 1,
      'instructies_id' => 1,
      'image_location'=> '/img/cocktails/4thofjuly.png',

    ]);



    }
}
