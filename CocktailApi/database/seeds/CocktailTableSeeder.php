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
      'id' =>  1,
      'naam' => '4th of July',
      'sterkte' => 21,
      'image_location'=> '/img/cocktails/4thofjuly.png',

    ]);



    }
}
