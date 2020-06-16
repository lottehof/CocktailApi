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

      DB::table('cocktail')->insert([
      'id' =>  2,
      'naam' => 'ABC Pousse Café',
      'sterkte' => 21,
      'image_location'=> '/img/cocktails/ABC.png',

    ]);

      DB::table('cocktail')->insert([
      'id' =>  3,
      'naam' => 'Abbey Cocktail',
      'sterkte' => 19,
      'image_location'=> '/img/cocktails/Abbey.png',
    ]);

      DB::table('cocktail')->insert([
      'id' =>  4,
      'naam' => 'Absinthe Frappé',
      'sterkte' => 19,
      'image_location'=> '/img/cocktails/absinthe.png',
    ]);

      DB::table('cocktail')->insert([
      'id' =>  5,
      'naam' => 'Bacardi',
      'sterkte' => 20,
      'image_location'=> '/img/cocktails/bacardi.png',
    ]);

      DB::table('cocktail')->insert([
      'id' =>  6,
      'naam' => 'Bahía Breeze',
      'sterkte' => 8,
      'image_location'=> '/img/cocktails/bahia.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  7,
    'naam' => 'Banshee',
    'sterkte' => 9,
    'image_location'=> '/img/cocktails/banshee.png',
  ]);

    DB::table('cocktail')->insert([
    'id' =>  8,
    'naam' => 'Barracuda',
    'sterkte' => 16,
    'image_location'=> '/img/cocktails/barracuda.png',
  ]);

    DB::table('cocktail')->insert([
    'id' =>  9,
    'naam' => 'Cape god',
    'sterkte' => 10,
    'image_location'=> '/img/cocktails/cape.png',
  ]);

    DB::table('cocktail')->insert([
    'id' =>  10,
    'naam' => 'Casino',
    'sterkte' => 15,
    'image_location'=> '/img/cocktails/casino.png',
  ]);

    DB::table('cocktail')->insert([
    'id' =>  11,
    'naam' => 'Campagne Cobbler',
    'sterkte' => 11,
    'image_location'=> '/img/cocktails/cobbler.png',
  ]);

    DB::table('cocktail')->insert([
    'id' =>  12,
    'naam' => 'Clover Club',
    'sterkte' => 19,
    'image_location'=> '/img/cocktails/clover.png',
  ]);

    DB::table('cocktail')->insert([
    'id' =>  13,
    'naam' => 'Cubby Blue',
    'sterkte' => 30,
    'image_location'=> '/img/cocktails/cubby.png',
  ]);

    DB::table('cocktail')->insert([
    'id' =>  14,
    'naam' => 'Daiquiri',
    'sterkte' => 18,
    'image_location'=> '/img/cocktails/daiquiri.png',
  ]);

    DB::table('cocktail')->insert([
    'id' =>  15,
    'naam' => 'Dark and Stormy',
    'sterkte' => 12,
    'image_location'=> '/img/cocktails/dark.png',
  ]);

    DB::table('cocktail')->insert([
    'id' =>  16,
    'naam' => 'De La Louisiane',
    'sterkte' => 30,
    'image_location'=> '/img/cocktails/louisiane.png',
  ]);

    DB::table('cocktail')->insert([
    'id' =>  17,
    'naam' => 'Derby',
    'sterkte' => 32,
    'image_location'=> '/img/cocktails/derby.png',
  ]);

    DB::table('cocktail')->insert([
    'id' =>  18,
    'naam' => 'El Presidente',
    'sterkte' => 30,
    'image_location'=> '/img/cocktails/presidente.png',
  ]);

    DB::table('cocktail')->insert([
    'id' =>  19,
    'naam' => 'Electric Iced Tea',
    'sterkte' => 14,
    'image_location'=> '/img/cocktails/electric.png',
  ]);

    DB::table('cocktail')->insert([
    'id' =>  20,
    'naam' => 'Emerald Isle',
    'sterkte' => 26,
    'image_location'=> '/img/cocktails/isle.png',
  ]);

    DB::table('cocktail')->insert([
    'id' =>  21,
    'naam' => 'Espresso Martini',
    'sterkte' => 15,
    'image_location'=> '/img/cocktails/espresso.png',
  ]);

    DB::table('cocktail')->insert([
    'id' =>  22,
    'naam' => 'Fitzgerald',
    'sterkte' => 18,
    'image_location'=> '/img/cocktails/fitzgerald.png',
  ]);

    DB::table('cocktail')->insert([
    'id' =>  23,
    'naam' => 'Freddy Fudpucker',
    'sterkte' => 13,
    'image_location'=> '/img/cocktails/freddy.png',
  ]);

    DB::table('cocktail')->insert([
    'id' =>  24,
    'naam' => 'French 75',
    'sterkte' => 13,
    'image_location'=> '/img/cocktails/french.png',
  ]);

    DB::table('cocktail')->insert([
    'id' =>  25,
    'naam' => 'French Martini',
    'sterkte' => 13,
    'image_location'=> '/img/cocktails/frenchmar.png',
  ]);

    DB::table('cocktail')->insert([
    'id' =>  26,
    'naam' => 'God Father',
    'sterkte' => 32,
    'image_location'=> '/img/cocktails/god.png',
  ]);

    DB::table('cocktail')->insert([
    'id' =>  27,
    'naam' => 'God Mother',
    'sterkte' => 32,
    'image_location'=> '/img/cocktails/mother.png',
  ]);

    DB::table('cocktail')->insert([
    'id' =>  28,
    'naam' => 'Golden dream',
    'sterkte' => 21,
    'image_location'=> '/img/cocktails/dream.png',
  ]);

    DB::table('cocktail')->insert([
    'id' =>  29,
    'naam' => 'Grasshopper',
    'sterkte' => 9,
    'image_location'=> '/img/cocktails/grass.png',
  ]);

    DB::table('cocktail')->insert([
    'id' =>  30,
    'naam' => 'Harvey Wallbanger',
    'sterkte' => 14,
    'image_location'=> '/img/cocktails/harvey.png',
  ]);

    DB::table('cocktail')->insert([
    'id' =>  31,
    'naam' => 'Harvey Wallbanger',
    'sterkte' => 14,
    'image_location'=> '/img/cocktails/harvey.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  32,
    'naam' => 'Hemmingway Daiquiri',
    'sterkte' => 21,
    'image_location'=> '/img/cocktails/hemmingway.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  33,
    'naam' => 'Horse Neck',
    'sterkte' => 10,
    'image_location'=> '/img/cocktails/horse.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  34,
    'naam' => 'Hurricane',
    'sterkte' => 24,
    'image_location'=> '/img/cocktails/hurricane.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  35,
    'naam' => 'Irish Buck',
    'sterkte' => 8,
    'image_location'=> '/img/cocktails/buck.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  36,
    'naam' => 'Irish Eyes',
    'sterkte' => 12,
    'image_location'=> '/img/cocktails/eyes.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  37,
    'naam' => 'Irish Flag',
    'sterkte' => 23,
    'image_location'=> '/img/cocktails/flag.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  38,
    'naam' => 'Island Breeze',
    'sterkte' => 8,
    'image_location'=> '/img/cocktails/breeze.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  39,
    'naam' => 'Jack Rose',
    'sterkte' => 25,
    'image_location'=> '/img/cocktails/jack.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  40,
    'naam' => 'John Collins',
    'sterkte' => 10,
    'image_location'=> '/img/cocktails/collins.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  41,
    'naam' => 'Kamikaze',
    'sterkte' => 25,
    'image_location'=> '/img/cocktails/kamikaze.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  42,
    'naam' => 'Kamikaze Shot',
    'sterkte' => 25,
    'image_location'=> '/img/cocktails/shot.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  43,
    'naam' => 'Kentucky Buck',
    'sterkte' => 11,
    'image_location'=> '/img/cocktails/kbuck.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  44,
    'naam' => 'Kir',
    'sterkte' => 12,
    'image_location'=> '/img/cocktails/kir.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  45,
    'naam' => 'Lemon Drop Martini',
    'sterkte' => 27,
    'image_location'=> '/img/cocktails/drop.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  46,
    'naam' => 'Lemonade',
    'sterkte' => 0,
    'image_location'=> '/img/cocktails/lemonade.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  47,
    'naam' => 'Lime Rickey',
    'sterkte' => 1,
    'image_location'=> '/img/cocktails/lemonade.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  48,
    'naam' => 'Long Island Iced Tea',
    'sterkte' => 20,
    'image_location'=> '/img/cocktails/long.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  49,
    'naam' => 'Long Island Iced Tea',
    'sterkte' => 20,
    'image_location'=> '/img/cocktails/long.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  50,
    'naam' => 'Mai Tai',
    'sterkte' => 26,
    'image_location'=> '/img/cocktails/mai.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  51,
    'naam' => 'Manhattan',
    'sterkte' => 27,
    'image_location'=> '/img/cocktails/manhattan.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  52,
    'naam' => 'Margarita',
    'sterkte' => 30,
    'image_location'=> '/img/cocktails/margarita.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  53,
    'naam' => 'Mimosa',
    'sterkte' => 6,
    'image_location'=> '/img/cocktails/mimosa.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  54,
    'naam' => 'Negroni',
    'sterkte' => 23,
    'image_location'=> '/img/cocktails/negroni.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  55,
    'naam' => 'Nutty Irishman',
    'sterkte' => 9,
    'image_location'=> '/img/cocktails/nutty.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  56,
    'naam' => 'Old Fashioned',
    'sterkte' => 29,
    'image_location'=> '/img/cocktails/old.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  57,
    'naam' => 'Old Pal',
    'sterkte' => 6,
    'image_location'=> '/img/cocktails/pal.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  58,
    'naam' => 'Orgasm',
    'sterkte' => 17,
    'image_location'=> '/img/cocktails/orgasm.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  59,
    'naam' => 'Painkiller',
    'sterkte' => 12,
    'image_location'=> '/img/cocktails/painkiller.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  60,
    'naam' => 'Piña Colada',
    'sterkte' => 6,
    'image_location'=> '/img/cocktails/pinacolada.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  61,
    'naam' => 'Rob Roy',
    'sterkte' => 29,
    'image_location'=> '/img/cocktails/rob.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  62,
    'naam' => 'Russian Spring Punch',
    'sterkte' => 12,
    'image_location'=> '/img/cocktails/punch.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  63,
    'naam' => 'Sangria',
    'sterkte' => 11,
    'image_location'=> '/img/cocktails/sangria.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  64,
    'naam' => 'Sex on the Beach',
    'sterkte' => 11,
    'image_location'=> '/img/cocktails/sex.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  65,
    'naam' => 'Tequila Sunrise',
    'sterkte' => 9,
    'image_location'=> '/img/cocktails/tequila.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  66,
    'naam' => 'Tipperary',
    'sterkte' => 16,
    'image_location'=> '/img/cocktails/tipperary.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  67,
    'naam' => 'Vampiro',
    'sterkte' => 10,
    'image_location'=> '/img/cocktails/vampiro.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  68,
    'naam' => 'Vesper',
    'sterkte' => 30,
    'image_location'=> '/img/cocktails/vesper.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  69,
    'naam' => 'Ward Eight',
    'sterkte' => 30,
    'image_location'=> '/img/cocktails/eight.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  70,
    'naam' => 'White Lady',
    'sterkte' => 24,
    'image_location'=> '/img/cocktails/lady.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  71,
    'naam' => 'Yellow Bird',
    'sterkte' => 30,
    'image_location'=> '/img/cocktails/bird.png',
    ]);

    DB::table('cocktail')->insert([
    'id' =>  72,
    'naam' => 'Zombie',
    'sterkte' => 16,
    'image_location'=> '/img/cocktails/zombie.png',
    ]);









    }
}
