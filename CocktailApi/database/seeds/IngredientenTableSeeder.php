<?php

use Illuminate\Database\Seeder;

class IngredientenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('ingredienten')->insert([
      'id' =>  1,
      'ingredient' => 'Vodka',
      'cocktail_id' => 1,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  2,
      'ingredient' => 'Blue Curacao',
      'cocktail_id' => 1,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  3,
      'ingredient' => 'Grenadine',
      'cocktail_id' => 1,
    ]);

    }
}
