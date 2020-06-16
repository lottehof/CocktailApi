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
      //4th of July
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

      //ABC Pousse Café
      DB::table('ingredienten')->insert([
      'id' =>  4,
      'ingredient' => 'Amaretto',
      'cocktail_id' => 2,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  5,
      'ingredient' => 'Baileys Irish Cream Liqueur',
      'cocktail_id' => 2,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  6,
      'ingredient' => 'Cointreau',
      'cocktail_id' => 2,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  7,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 2,
    ]);

    //Abbey Cocktail
      DB::table('ingredienten')->insert([
      'id' =>  8,
      'ingredient' => 'Gin',
      'cocktail_id' => 3,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  9,
      'ingredient' => 'Lillet Blanc',
      'cocktail_id' => 3,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  10,
      'ingredient' => 'Orange Juice',
      'cocktail_id' => 3,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  11,
      'ingredient' => 'Angostura Bitters',
      'cocktail_id' => 3,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  12,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 3,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  13,
      'ingredient' => 'Orange Peel',
      'cocktail_id' => 3,
    ]);

      //Absinthe Frappé
      DB::table('ingredienten')->insert([
      'id' =>  14,
      'ingredient' => 'Absinthe',
      'cocktail_id' => 4,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  15,
      'ingredient' => 'Simple Syrup',
      'cocktail_id' => 4,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  16,
      'ingredient' => 'Water',
      'cocktail_id' => 4,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  17,
      'ingredient' => 'Crushed Ice',
      'cocktail_id' => 4,
    ]);

      //Bacardi
      DB::table('ingredienten')->insert([
      'id' =>  18,
      'ingredient' => 'White Rum',
      'cocktail_id' => 5,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  19,
      'ingredient' => 'Lime Juice',
      'cocktail_id' => 5,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  20,
      'ingredient' => 'Grenadine',
      'cocktail_id' => 5,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  21,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 5,
    ]);

      //Bahía Breeze
      DB::table('ingredienten')->insert([
      'id' =>  22,
      'ingredient' => 'Tequila Reposado',
      'cocktail_id' => 6,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  23,
      'ingredient' => 'Pineapple Juice',
      'cocktail_id' => 6,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  24,
      'ingredient' => 'Cranberry Juice',
      'cocktail_id' => 6,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  25,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 6,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  26,
      'ingredient' => 'Lime Wedge',
      'cocktail_id' => 6,
    ]);

      //Banshee
      DB::table('ingredienten')->insert([
      'id' =>  27,
      'ingredient' => 'Banana Liquer',
      'cocktail_id' => 7,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  28,
      'ingredient' => 'White Crème de Cacao',
      'cocktail_id' => 7,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  29,
      'ingredient' => 'Heavy cream',
      'cocktail_id' => 7,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  30,
      'ingredient' => 'Ice',
      'cocktail_id' => 7,
    ]);

      //Barracuda
      DB::table('ingredienten')->insert([
      'id' =>  31,
      'ingredient' => 'Gold Rum',
      'cocktail_id' => 8,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  32,
      'ingredient' => 'Galliano',
      'cocktail_id' => 8,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  33,
      'ingredient' => 'Pineapple Juice',
      'cocktail_id' => 8,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  34,
      'ingredient' => 'Lime Juice',
      'cocktail_id' => 8,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  35,
      'ingredient' => 'Prosecco',
      'cocktail_id' => 8,
    ]);

      //Cape god
      DB::table('ingredienten')->insert([
      'id' =>  36,
      'ingredient' => 'Vodka',
      'cocktail_id' => 9,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  37,
      'ingredient' => 'Cranberry Juice',
      'cocktail_id' => 9,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  38,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 9,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  39,
      'ingredient' => 'Lime Wedge',
      'cocktail_id' => 9,
    ]);

      //Casino
      DB::table('ingredienten')->insert([
      'id' =>  40,
      'ingredient' => 'Old Tom Gin',
      'cocktail_id' => 10,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  41,
      'ingredient' => 'Maraschino Liquer',
      'cocktail_id' => 10,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  42,
      'ingredient' => 'Lemon Juice',
      'cocktail_id' => 10,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  43,
      'ingredient' => 'Orange Bitters',
      'cocktail_id' => 10,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  44,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 10,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  45,
      'ingredient' => 'Lemon Twist',
      'cocktail_id' => 10,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  46,
      'ingredient' => 'Cocktail Cherry',
      'cocktail_id' => 10,
    ]);

      //Campagne Cobbler
      DB::table('ingredienten')->insert([
      'id' =>  47,
      'ingredient' => 'Champagne',
      'cocktail_id' => 11,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  48,
      'ingredient' => 'Luxardo Maraschino Liquer',
      'cocktail_id' => 11,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  49,
      'ingredient' => 'Orange Wedge',
      'cocktail_id' => 11,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  50,
      'ingredient' => 'Lemon Wedge',
      'cocktail_id' => 11,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  51,
      'ingredient' => 'Pineapple Wedge',
      'cocktail_id' => 11,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  52,
      'ingredient' => 'Ice',
      'cocktail_id' => 11,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  53,
      'ingredient' => 'Orange Peel',
      'cocktail_id' => 11,
    ]);

      //Clover Club
      DB::table('ingredienten')->insert([
      'id' =>  54,
      'ingredient' => 'Gin',
      'cocktail_id' => 12,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  55,
      'ingredient' => 'Raspberry Syrup',
      'cocktail_id' => 12,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  56,
      'ingredient' => 'Lemon Juice',
      'cocktail_id' => 12,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  57,
      'ingredient' => 'Egg White',
      'cocktail_id' => 12,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  58,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 12,
    ]);

      //Cubby Blue
      DB::table('ingredienten')->insert([
      'id' =>  59,
      'ingredient' => 'Bacardi Carta Blanca',
      'cocktail_id' => 13,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  60,
      'ingredient' => 'Blue Curacao',
      'cocktail_id' => 13,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  61,
      'ingredient' => 'Grenadine',
      'cocktail_id' => 13,
    ]);

      //Daiquiri
      DB::table('ingredienten')->insert([
      'id' =>  62,
      'ingredient' => 'White Rum',
      'cocktail_id' => 14,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  63,
      'ingredient' => 'Lime Juice',
      'cocktail_id' => 14,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  64,
      'ingredient' => 'Simple Syrup',
      'cocktail_id' => 14,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  65,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 14,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  66,
      'ingredient' => 'Lime Slice',
      'cocktail_id' => 14,
    ]);

      //Dark and Stormy
      DB::table('ingredienten')->insert([
      'id' =>  67,
      'ingredient' => 'Dark Rum',
      'cocktail_id' => 15,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  68,
      'ingredient' => 'Ginger Beer',
      'cocktail_id' => 15,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  69,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 15,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  70,
      'ingredient' => 'Lime Wedge',
      'cocktail_id' => 15,
    ]);

      //De La Louisiane
      DB::table('ingredienten')->insert([
      'id' =>  71,
      'ingredient' => 'Rye Whiskey',
      'cocktail_id' => 16,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  72,
      'ingredient' => 'Dolin Blanc Vermouth',
      'cocktail_id' => 16,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  73,
      'ingredient' => 'Benedictine D.O.M.',
      'cocktail_id' => 16,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  74,
      'ingredient' => 'Absinthe',
      'cocktail_id' => 16,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  75,
      'ingredient' => 'Peychauds Bitters',
      'cocktail_id' => 16,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  76,
      'ingredient' => 'Ice',
      'cocktail_id' => 16,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  77,
      'ingredient' => 'Cocktail Cherry',
      'cocktail_id' => 16,
    ]);

      //Derby
      DB::table('ingredienten')->insert([
      'id' =>  78,
      'ingredient' => 'Gin',
      'cocktail_id' => 17,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  79,
      'ingredient' => 'Peach Bitters',
      'cocktail_id' => 17,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  80,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 17,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  81,
      'ingredient' => 'Mint Leaves',
      'cocktail_id' => 17,
    ]);

      //El Presidente
      DB::table('ingredienten')->insert([
      'id' =>  82,
      'ingredient' => 'White Rum',
      'cocktail_id' => 18,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  83,
      'ingredient' => 'Dry Vermouth',
      'cocktail_id' => 18,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  84,
      'ingredient' => 'Pierre Ferrand Dry Curacao',
      'cocktail_id' => 18,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  85,
      'ingredient' => 'Grenadine',
      'cocktail_id' => 18,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  86,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 18,
    ]);

    }
}
