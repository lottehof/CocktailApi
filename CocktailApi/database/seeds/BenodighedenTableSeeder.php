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

      //Electric Iced Tea
      DB::table('benodigheden')->insert([
      'id' =>  48,
      'benodigheid' => 'Barspoon',
      'cocktail_id' => 19,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  49,
      'benodigheid' => 'Collins Glass',
      'cocktail_id' => 19,
    ]);

      //Emerald Isle
      DB::table('benodigheden')->insert([
      'id' =>  50,
      'benodigheid' => 'Shaker',
      'cocktail_id' => 20,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  51,
      'benodigheid' => 'Strainer',
      'cocktail_id' => 20,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  52,
      'benodigheid' => 'Cocktail Glass',
      'cocktail_id' => 20,
    ]);

      //Espresso Martini
      DB::table('benodigheden')->insert([
      'id' =>  53,
      'benodigheid' => 'Shaker',
      'cocktail_id' => 21,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  54,
      'benodigheid' => 'Strainer',
      'cocktail_id' => 21,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  55,
      'benodigheid' => 'Cocktail Glass',
      'cocktail_id' => 21,
    ]);

      //Espresso Martini
      DB::table('benodigheden')->insert([
      'id' =>  56,
      'benodigheid' => 'Shaker',
      'cocktail_id' => 22,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  57,
      'benodigheid' => 'Strainer',
      'cocktail_id' => 22,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  58,
      'benodigheid' => 'Old Fashioned Glass',
      'cocktail_id' => 22,
    ]);

      //Freddy Fudpucker
      DB::table('benodigheden')->insert([
      'id' =>  59,
      'benodigheid' => 'Collins Glass',
      'cocktail_id' => 23,
    ]);

      //French 75
      DB::table('benodigheden')->insert([
      'id' =>  60,
      'benodigheid' => 'Shaker',
      'cocktail_id' => 24,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  61,
      'benodigheid' => 'Champagne Glass',
      'cocktail_id' => 24,
    ]);

      //French Martini
      DB::table('benodigheden')->insert([
      'id' =>  62,
      'benodigheid' => 'Shaker',
      'cocktail_id' => 25,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  63,
      'benodigheid' => 'Strainer',
      'cocktail_id' => 25,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  64,
      'benodigheid' => 'Cocktail Glass',
      'cocktail_id' => 25,
    ]);

      //God Father
      DB::table('benodigheden')->insert([
      'id' =>  65,
      'benodigheid' => 'Barspoon',
      'cocktail_id' => 26,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  66,
      'benodigheid' => 'Old Fashioned Glass',
      'cocktail_id' => 26,
    ]);

      //God Mother
      DB::table('benodigheden')->insert([
      'id' =>  67,
      'benodigheid' => 'Barspoon',
      'cocktail_id' => 27,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  68,
      'benodigheid' => 'Old Fashioned Glass',
      'cocktail_id' => 27,
    ]);

      //Golden Dream
      DB::table('benodigheden')->insert([
      'id' =>  69,
      'benodigheid' => 'Shaker',
      'cocktail_id' => 28,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  70,
      'benodigheid' => 'Cocktail Glass',
      'cocktail_id' => 28,
    ]);

      //Grasshopper
      DB::table('benodigheden')->insert([
      'id' =>  71,
      'benodigheid' => 'Shaker',
      'cocktail_id' => 29,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  72,
      'benodigheid' => 'Cocktail Glass',
      'cocktail_id' => 29,
    ]);

      //Harvey Wallbanger
      DB::table('benodigheden')->insert([
      'id' =>  73,
      'benodigheid' => 'Barspoon',
      'cocktail_id' => 30,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  74,
      'benodigheid' => 'Collins Glass',
      'cocktail_id' => 30,
    ]);

      //Hemmingway Daiquiri
      DB::table('benodigheden')->insert([
      'id' =>  75,
      'benodigheid' => 'Shaker',
      'cocktail_id' => 31,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  76,
      'benodigheid' => 'Strainer',
      'cocktail_id' => 31,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  77,
      'benodigheid' => 'Cocktail Glass',
      'cocktail_id' => 31,
    ]);

      //Horse Neck
      DB::table('benodigheden')->insert([
      'id' =>  78,
      'benodigheid' => 'Barspoon',
      'cocktail_id' => 32,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  79,
      'benodigheid' => 'Collins Glass',
      'cocktail_id' => 32,
    ]);

      //Hurricane
      DB::table('benodigheden')->insert([
      'id' =>  80,
      'benodigheid' => 'Shaker',
      'cocktail_id' => 33,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  81,
      'benodigheid' => 'Strainer',
      'cocktail_id' => 33,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  82,
      'benodigheid' => 'Hurricane Glass',
      'cocktail_id' => 33,
    ]);

      //Irish Buck
      DB::table('benodigheden')->insert([
      'id' =>  83,
      'benodigheid' => 'Collins Glass',
      'cocktail_id' => 34,
    ]);

      //Irish Eyes
      DB::table('benodigheden')->insert([
      'id' =>  84,
      'benodigheid' => 'Shaker',
      'cocktail_id' => 35,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  85,
      'benodigheid' => 'Strainer',
      'cocktail_id' => 35,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  86,
      'benodigheid' => 'Old Fashioned Glass',
      'cocktail_id' => 35,
    ]);

      //Irish Flag
      DB::table('benodigheden')->insert([
      'id' =>  87,
      'benodigheid' => 'Barspoon',
      'cocktail_id' => 36,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  88,
      'benodigheid' => 'Shot Glass',
      'cocktail_id' => 36,
    ]);

      //Island Breeze
      DB::table('benodigheden')->insert([
      'id' =>  89,
      'benodigheid' => 'Collins Glass',
      'cocktail_id' => 37,
    ]);

      //Jack Rose
      DB::table('benodigheden')->insert([
      'id' =>  90,
      'benodigheid' => 'Shaker',
      'cocktail_id' => 38,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  91,
      'benodigheid' => 'Strainer',
      'cocktail_id' => 38,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  92,
      'benodigheid' => 'Cocktail Glass',
      'cocktail_id' => 38,
    ]);

      //John Collins
      DB::table('benodigheden')->insert([
      'id' =>  93,
      'benodigheid' => 'Barspoon',
      'cocktail_id' => 39,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  94,
      'benodigheid' => 'Collins Glass',
      'cocktail_id' => 39,
    ]);

      //Kamikaze
      DB::table('benodigheden')->insert([
      'id' =>  95,
      'benodigheid' => 'Shaker',
      'cocktail_id' => 40,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  96,
      'benodigheid' => 'Cocktail Glass',
      'cocktail_id' => 40,
    ]);

      //Kamikaze Shot
      DB::table('benodigheden')->insert([
      'id' =>  97,
      'benodigheid' => 'Shaker',
      'cocktail_id' => 41,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  98,
      'benodigheid' => 'Strainer',
      'cocktail_id' => 41,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  99,
      'benodigheid' => 'Shot Glass',
      'cocktail_id' => 41,
    ]);

      //Kentucky Buck
      DB::table('benodigheden')->insert([
      'id' =>  100,
      'benodigheid' => 'Muddler',
      'cocktail_id' => 42,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  101,
      'benodigheid' => 'Shaker',
      'cocktail_id' => 42,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  102,
      'benodigheid' => 'Strainer',
      'cocktail_id' => 42,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  103,
      'benodigheid' => 'Collins Glass',
      'cocktail_id' => 42,
    ]);

      //Kir
      DB::table('benodigheden')->insert([
      'id' =>  104,
      'benodigheid' => 'Champagne Glass',
      'cocktail_id' => 43,
    ]);

      //Lemon Drop Martini
      DB::table('benodigheden')->insert([
      'id' =>  105,
      'benodigheid' => 'Shaker',
      'cocktail_id' => 44,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  106,
      'benodigheid' => 'Strainer',
      'cocktail_id' => 44,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  107,
      'benodigheid' => 'Cocktail Glass',
      'cocktail_id' => 44,
    ]);

      //Lemonade
      DB::table('benodigheden')->insert([
      'id' =>  108,
      'benodigheid' => 'Shaker',
      'cocktail_id' => 54,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  109,
      'benodigheid' => 'Strainer',
      'cocktail_id' => 45,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  110,
      'benodigheid' => 'Collins Glass',
      'cocktail_id' => 45,
    ]);

      //Lime Rickey
      DB::table('benodigheden')->insert([
      'id' =>  111,
      'benodigheid' => 'Collins Glass',
      'cocktail_id' => 46,
    ]);

      //Long Island Ice Tea
      DB::table('benodigheden')->insert([
      'id' =>  112,
      'benodigheid' => 'Barspoon',
      'cocktail_id' => 47,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  113,
      'benodigheid' => 'Collins Glass',
      'cocktail_id' => 47,
    ]);

      //Mai Tai
      DB::table('benodigheden')->insert([
      'id' =>  114,
      'benodigheid' => 'Shaker',
      'cocktail_id' => 48,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  115,
      'benodigheid' => 'Strainer',
      'cocktail_id' => 48,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  116,
      'benodigheid' => 'Collins Glass',
      'cocktail_id' => 48,
    ]);

      //Manhattan
      DB::table('benodigheden')->insert([
      'id' =>  117,
      'benodigheid' => 'Mixing Glass',
      'cocktail_id' => 49,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  118,
      'benodigheid' => 'Barspoon',
      'cocktail_id' => 49,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  119,
      'benodigheid' => 'Cocktail Glass',
      'cocktail_id' => 49,
    ]);

      //Margarita
      DB::table('benodigheden')->insert([
      'id' =>  120,
      'benodigheid' => 'Shaker',
      'cocktail_id' => 50,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  121,
      'benodigheid' => 'Strainer',
      'cocktail_id' => 50,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  122,
      'benodigheid' => 'Margarita Glass',
      'cocktail_id' => 50,
    ]);

      //Mimosa
      DB::table('benodigheden')->insert([
      'id' =>  123,
      'benodigheid' => 'Barspoon',
      'cocktail_id' => 51,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  124,
      'benodigheid' => 'Champagne Glass',
      'cocktail_id' => 51,
    ]);

      //Negroni
      DB::table('benodigheden')->insert([
      'id' =>  125,
      'benodigheid' => 'Barspoon',
      'cocktail_id' => 52,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  126,
      'benodigheid' => 'Old Fashioned Glass',
      'cocktail_id' => 52,
    ]);

      //Nutty Irishman
      DB::table('benodigheden')->insert([
      'id' =>  127,
      'benodigheid' => 'Shaker',
      'cocktail_id' => 53,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  128,
      'benodigheid' => 'Strainer',
      'cocktail_id' => 53,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  129,
      'benodigheid' => 'Old Fashioned Glass',
      'cocktail_id' => 53,
    ]);

      //Old Fashioned
      DB::table('benodigheden')->insert([
      'id' =>  130,
      'benodigheid' => 'Muddler',
      'cocktail_id' => 54,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  131,
      'benodigheid' => 'Old Fashioned Glass',
      'cocktail_id' => 54,
    ]);

      //Old Pal
      DB::table('benodigheden')->insert([
      'id' =>  132,
      'benodigheid' => 'Mixing Glass',
      'cocktail_id' => 55,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  133,
      'benodigheid' => 'Barspoon',
      'cocktail_id' => 55,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  134,
      'benodigheid' => 'Strainer',
      'cocktail_id' => 55,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  135,
      'benodigheid' => 'Old Fashioned Glass',
      'cocktail_id' => 55,
    ]);

      //Orgasm
      DB::table('benodigheden')->insert([
      'id' =>  136,
      'benodigheid' => 'Shaker',
      'cocktail_id' => 56,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  137,
      'benodigheid' => 'Strainer',
      'cocktail_id' => 56,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  138,
      'benodigheid' => 'Shot Glass',
      'cocktail_id' => 56,
    ]);

      //Painkiller
      DB::table('benodigheden')->insert([
      'id' =>  139,
      'benodigheid' => 'Shaker',
      'cocktail_id' => 57,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  140,
      'benodigheid' => 'Hurricane Glass',
      'cocktail_id' => 57,
    ]);

      //Piña Colada'
      DB::table('benodigheden')->insert([
      'id' =>  141,
      'benodigheid' => 'Blender',
      'cocktail_id' => 58,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  142,
      'benodigheid' => 'Hurricane Glass',
      'cocktail_id' => 58,
    ]);

      //Rob Roy
      DB::table('benodigheden')->insert([
      'id' =>  143,
      'benodigheid' => 'Mixing Glass',
      'cocktail_id' => 59,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  144,
      'benodigheid' => 'Barspoon',
      'cocktail_id' => 59,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  145,
      'benodigheid' => 'Strainer',
      'cocktail_id' => 59,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  146,
      'benodigheid' => 'Cocktail Glass',
      'cocktail_id' => 59,
    ]);

      //Russian Spring Punch
      DB::table('benodigheden')->insert([
      'id' =>  147,
      'benodigheid' => 'Shaker',
      'cocktail_id' => 60,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  148,
      'benodigheid' => 'Strainer',
      'cocktail_id' => 60,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  149,
      'benodigheid' => 'Collins Glass',
      'cocktail_id' => 60,
    ]);

      //Sangria
      DB::table('benodigheden')->insert([
      'id' =>  150,
      'benodigheid' => 'Muddler',
      'cocktail_id' => 61,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  151,
      'benodigheid' => 'Mixing Glass',
      'cocktail_id' => 61,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  152,
      'benodigheid' => 'Barspoon',
      'cocktail_id' => 61,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  153,
      'benodigheid' => 'Strainer',
      'cocktail_id' => 61,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  154,
      'benodigheid' => 'Sour Glass',
      'cocktail_id' => 61,
    ]);

      //Sex on the Beach
      DB::table('benodigheden')->insert([
      'id' =>  155,
      'benodigheid' => 'Collins Glass',
      'cocktail_id' => 62,
    ]);

      //Tequila Sunrise
      DB::table('benodigheden')->insert([
      'id' =>  156,
      'benodigheid' => 'Collins Glass',
      'cocktail_id' => 63,
    ]);

      //Tipperary
      DB::table('benodigheden')->insert([
      'id' =>  157,
      'benodigheid' => 'Mixing Glass',
      'cocktail_id' => 64,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  158,
      'benodigheid' => 'Barspoon',
      'cocktail_id' => 64,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  159,
      'benodigheid' => 'Strainer',
      'cocktail_id' => 64,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  160,
      'benodigheid' => 'Cocktail Glass',
      'cocktail_id' => 64,
    ]);

      //Vampiro
      DB::table('benodigheden')->insert([
      'id' =>  161,
      'benodigheid' => 'Shaker',
      'cocktail_id' => 65,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  162,
      'benodigheid' => 'Strainer',
      'cocktail_id' => 65,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  163,
      'benodigheid' => 'Collins Glass',
      'cocktail_id' => 65,
    ]);

      //Vesper
      DB::table('benodigheden')->insert([
      'id' =>  164,
      'benodigheid' => 'Shaker',
      'cocktail_id' => 66,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  165,
      'benodigheid' => 'Strainer',
      'cocktail_id' => 66,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  166,
      'benodigheid' => 'Cocktail Glass',
      'cocktail_id' => 66,
    ]);

      //Ward Eight
      DB::table('benodigheden')->insert([
      'id' =>  167,
      'benodigheid' => 'Shaker',
      'cocktail_id' => 67,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  168,
      'benodigheid' => 'Strainer',
      'cocktail_id' => 67,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  169,
      'benodigheid' => 'Cocktail Glass',
      'cocktail_id' => 67,
    ]);

      //White Lady
      DB::table('benodigheden')->insert([
      'id' =>  170,
      'benodigheid' => 'Shaker',
      'cocktail_id' => 68,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  171,
      'benodigheid' => 'Strainer',
      'cocktail_id' => 68,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  172,
      'benodigheid' => 'Cocktail Glass',
      'cocktail_id' => 68,
    ]);

      //Yellow Bird
      DB::table('benodigheden')->insert([
      'id' =>  173,
      'benodigheid' => 'Shaker',
      'cocktail_id' => 69,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  174,
      'benodigheid' => 'Strainer',
      'cocktail_id' => 69,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  175,
      'benodigheid' => 'Cocktail Glass',
      'cocktail_id' => 69,
    ]);

      //Zombie
      DB::table('benodigheden')->insert([
      'id' =>  176,
      'benodigheid' => 'Shaker',
      'cocktail_id' => 70,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  177,
      'benodigheid' => 'Strainer',
      'cocktail_id' => 70,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  178,
      'benodigheid' => 'Cocktail Glass',
      'cocktail_id' => 70,
    ]);












    }
}
