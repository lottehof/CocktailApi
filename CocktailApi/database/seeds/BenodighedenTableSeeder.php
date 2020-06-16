<?php

use Illuminate\Database\Seeder;

class BenodighedenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //4th of July
      DB::table('benodigheden')->insert([
      'id' =>  1,
      'benodigheid' => 'Barspoon',
      'cocktail_id' => 1,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  2,
      'benodigheid' => 'Shot Glass',
      'cocktail_id' => 1,
    ]);

      //ABC Pousse Café
      DB::table('benodigheden')->insert([
      'id' =>  3,
      'benodigheid' => 'Barspoon',
      'cocktail_id' => 2,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  4,
      'benodigheid' => 'Shot Glass',
      'cocktail_id' => 2,
    ]);

      //Abbey Cocktail
      DB::table('benodigheden')->insert([
      'id' =>  5,
      'benodigheid' => 'Shaker',
      'cocktail_id' => 3,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  6,
      'benodigheid' => 'Strainer',
      'cocktail_id' => 3,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  7,
      'benodigheid' => 'Cocktail Glass',
      'cocktail_id' => 3,
    ]);


      //Absinthe Frappé
      DB::table('benodigheden')->insert([
      'id' =>  8,
      'benodigheid' => 'Shaker',
      'cocktail_id' => 4,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  9,
      'benodigheid' => 'Strainer',
      'cocktail_id' => 4,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  10,
      'benodigheid' => 'Old Fashioned Glass',
      'cocktail_id' => 4,
    ]);

      //Bacardi
      DB::table('benodigheden')->insert([
      'id' =>  11,
      'benodigheid' => 'Shaker',
      'cocktail_id' => 5,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  12,
      'benodigheid' => 'Strainer',
      'cocktail_id' => 5,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  13,
      'benodigheid' => 'Cocktail Glass',
      'cocktail_id' => 5,
    ]);

      //Bahía Breeze
      DB::table('benodigheden')->insert([
      'id' =>  14,
      'benodigheid' => 'Collins Glass',
      'cocktail_id' => 6,
    ]);

      //Banshee
      DB::table('benodigheden')->insert([
      'id' =>  15,
      'benodigheid' => 'Shaker',
      'cocktail_id' => 7,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  16,
      'benodigheid' => 'Strainer',
      'cocktail_id' => 7,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  17,
      'benodigheid' => 'Cocktail Glass',
      'cocktail_id' => 7,
    ]);

      //Barracuda
      DB::table('benodigheden')->insert([
      'id' =>  18,
      'benodigheid' => 'Barspoon',
      'cocktail_id' => 8,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  19,
      'benodigheid' => 'Collins Glass',
      'cocktail_id' => 8,
    ]);

      //Cape God
      DB::table('benodigheden')->insert([
      'id' =>  20,
      'benodigheid' => 'Barspoon',
      'cocktail_id' => 9,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  21,
      'benodigheid' => 'Old Fashioned Glass',
      'cocktail_id' => 9,
    ]);

      //Casino
      DB::table('benodigheden')->insert([
      'id' =>  22,
      'benodigheid' => 'Shaker',
      'cocktail_id' => 10,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  23,
      'benodigheid' => 'Strainer',
      'cocktail_id' => 10,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  24,
      'benodigheid' => 'Cocktail Glass',
      'cocktail_id' => 10,
    ]);

      //Champagne Cobbler
      DB::table('benodigheden')->insert([
      'id' =>  25,
      'benodigheid' => 'Mixing Glass',
      'cocktail_id' => 11,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  26,
      'benodigheid' => 'Muddler',
      'cocktail_id' => 11,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  27,
      'benodigheid' => 'Barspoon',
      'cocktail_id' => 11,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  28,
      'benodigheid' => 'Strainer',
      'cocktail_id' => 11,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  29,
      'benodigheid' => 'Champagne Glass',
      'cocktail_id' => 11,
    ]);

      //Clover Club
      DB::table('benodigheden')->insert([
      'id' =>  30,
      'benodigheid' => 'Shaker',
      'cocktail_id' => 12,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  31,
      'benodigheid' => 'Strainer',
      'cocktail_id' => 12,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  32,
      'benodigheid' => 'Cocktail Glass',
      'cocktail_id' => 12,
    ]);

      //Cubby Blue
      DB::table('benodigheden')->insert([
      'id' =>  33,
      'benodigheid' => 'Shot Glass',
      'cocktail_id' => 13,
    ]);

      //Daiquiri
      DB::table('benodigheden')->insert([
      'id' =>  34,
      'benodigheid' => 'Shaker',
      'cocktail_id' => 14,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  35,
      'benodigheid' => 'Strainer',
      'cocktail_id' => 14,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  36,
      'benodigheid' => 'Cocktail Glass',
      'cocktail_id' => 14,
    ]);

      //Dark and Stormy
      DB::table('benodigheden')->insert([
      'id' =>  37,
      'benodigheid' => 'Collins Glass',
      'cocktail_id' => 15,
    ]);

      //De La Louisiane
      DB::table('benodigheden')->insert([
      'id' =>  38,
      'benodigheid' => 'Mixing Glass',
      'cocktail_id' => 16,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  39,
      'benodigheid' => 'Barspoon',
      'cocktail_id' => 16,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  40,
      'benodigheid' => 'Strainer',
      'cocktail_id' => 16,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  41,
      'benodigheid' => 'Cocktail Glass',
      'cocktail_id' => 16,
    ]);

      //Derby
      DB::table('benodigheden')->insert([
      'id' =>  42,
      'benodigheid' => 'Mixing Glass',
      'cocktail_id' => 17,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  43,
      'benodigheid' => 'Barspoon',
      'cocktail_id' => 17,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  44,
      'benodigheid' => 'Cocktail Glass',
      'cocktail_id' => 17,
    ]);

      //El Presidente
      DB::table('benodigheden')->insert([
      'id' =>  45,
      'benodigheid' => 'Shaker',
      'cocktail_id' => 18,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  46,
      'benodigheid' => 'Strainer',
      'cocktail_id' => 18,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  47,
      'benodigheid' => 'Cocktail Glass',
      'cocktail_id' => 18,
    ]);


    }
}
