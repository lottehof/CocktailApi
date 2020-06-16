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
      'id' =>  '1',
      'ingredient' => 'Vodka
                       Blue Curacao
                       Grenadine'
    ]);

    }
}
