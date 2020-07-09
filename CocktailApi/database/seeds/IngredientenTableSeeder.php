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
      'ingredient' => '22.5 ml Vodka',
      'cocktail_id' => 1,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  2,
      'ingredient' => '22.5 ml Blue Curacao',
      'cocktail_id' => 1,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  3,
      'ingredient' => '22.5 ml Grenadine',
      'cocktail_id' => 1,
    ]);

      //ABC Pousse Café
      DB::table('ingredienten')->insert([
      'id' =>  4,
      'ingredient' => '15 ml Amaretto',
      'cocktail_id' => 2,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  5,
      'ingredient' => '15 ml Baileys Irish Cream Liqueur',
      'cocktail_id' => 2,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  6,
      'ingredient' => '15 ml Cointreau',
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
      'ingredient' => '45 ml Gin',
      'cocktail_id' => 3,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  9,
      'ingredient' => '22.5 ml Lillet Blanc',
      'cocktail_id' => 3,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  10,
      'ingredient' => '30 ml Orange Juice',
      'cocktail_id' => 3,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  11,
      'ingredient' => '1 dash Angostura Bitters',
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
      'ingredient' => '30 ml Absinthe',
      'cocktail_id' => 4,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  15,
      'ingredient' => '15 ml Simple Syrup',
      'cocktail_id' => 4,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  16,
      'ingredient' => '60 ml Water',
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
      'ingredient' => '45 ml White Rum',
      'cocktail_id' => 5,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  19,
      'ingredient' => '20 ml Lime Juice',
      'cocktail_id' => 5,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  20,
      'ingredient' => '10 ml Grenadine',
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
      'ingredient' => '45 ml Tequila Reposado',
      'cocktail_id' => 6,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  23,
      'ingredient' => '120 ml Pineapple Juice',
      'cocktail_id' => 6,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  24,
      'ingredient' => '45 ml Cranberry Juice',
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
      'ingredient' => '30 ml Banana Liquer',
      'cocktail_id' => 7,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  28,
      'ingredient' => '30 ml White Crème de Cacao',
      'cocktail_id' => 7,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  29,
      'ingredient' => '60 ml Heavy cream',
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
      'ingredient' => '45 ml Gold Rum',
      'cocktail_id' => 8,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  32,
      'ingredient' => '15 ml Galliano',
      'cocktail_id' => 8,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  33,
      'ingredient' => '60 ml Pineapple Juice',
      'cocktail_id' => 8,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  34,
      'ingredient' => '1 dash Lime Juice',
      'cocktail_id' => 8,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  35,
      'ingredient' => '20 ml Prosecco',
      'cocktail_id' => 8,
    ]);

      //Cape god
      DB::table('ingredienten')->insert([
      'id' =>  36,
      'ingredient' => '45 ml Vodka',
      'cocktail_id' => 9,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  37,
      'ingredient' => '67.5 ml Cranberry Juice',
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
      'ingredient' => '45 ml Old Tom Gin',
      'cocktail_id' => 10,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  41,
      'ingredient' => '10 ml Maraschino Liquer',
      'cocktail_id' => 10,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  42,
      'ingredient' => '10 ml Lemon Juice',
      'cocktail_id' => 10,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  43,
      'ingredient' => '10 ml Orange Bitters',
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
      'ingredient' => '120 ml Champagne',
      'cocktail_id' => 11,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  48,
      'ingredient' => '22.5 ml Luxardo Maraschino Liquer',
      'cocktail_id' => 11,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  49,
      'ingredient' => '2 Orange Wedge',
      'cocktail_id' => 11,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  50,
      'ingredient' => '2 Lemon Wedge',
      'cocktail_id' => 11,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  51,
      'ingredient' => '2 Pineapple Wedge',
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
      'ingredient' => '45 ml Gin',
      'cocktail_id' => 12,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  55,
      'ingredient' => '15 ml Raspberry Syrup',
      'cocktail_id' => 12,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  56,
      'ingredient' => '15 ml Lemon Juice',
      'cocktail_id' => 12,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  57,
      'ingredient' => '1 Egg White',
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
      'ingredient' => '30 ml Bacardi Carta Blanca',
      'cocktail_id' => 13,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  60,
      'ingredient' => '30 ml Blue Curacao',
      'cocktail_id' => 13,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  61,
      'ingredient' => '1 splash Grenadine',
      'cocktail_id' => 13,
    ]);

      //Daiquiri
      DB::table('ingredienten')->insert([
      'id' =>  62,
      'ingredient' => '45 ml White Rum',
      'cocktail_id' => 14,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  63,
      'ingredient' => '25 ml Lime Juice',
      'cocktail_id' => 14,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  64,
      'ingredient' => '15 ml Simple Syrup',
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
      'ingredient' => '60 ml Dark Rum',
      'cocktail_id' => 15,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  68,
      'ingredient' => '100 ml Ginger Beer',
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
      'ingredient' => '60 ml Rye Whiskey',
      'cocktail_id' => 16,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  72,
      'ingredient' => '22.5 ml Dolin Blanc Vermouth',
      'cocktail_id' => 16,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  73,
      'ingredient' => '22.5 ml Benedictine D.O.M.',
      'cocktail_id' => 16,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  74,
      'ingredient' => '3 dash Absinthe',
      'cocktail_id' => 16,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  75,
      'ingredient' => '3 dash Peychauds Bitters',
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
      'ingredient' => '60 ml Gin',
      'cocktail_id' => 17,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  79,
      'ingredient' => '2 drops Peach Bitters',
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
      'ingredient' => '45 ml White Rum',
      'cocktail_id' => 18,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  83,
      'ingredient' => '22.5 ml Dry Vermouth',
      'cocktail_id' => 18,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  84,
      'ingredient' => '15 ml Pierre Ferrand Dry Curacao',
      'cocktail_id' => 18,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  85,
      'ingredient' => '0.5 tsp Grenadine',
      'cocktail_id' => 18,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  86,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 18,
    ]);

      //Electric Iced Tea
      DB::table('ingredienten')->insert([
      'id' =>  87,
      'ingredient' => '15 ml Bourbon',
      'cocktail_id' => 19,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  88,
      'ingredient' => '15 ml Vodka',
      'cocktail_id' => 19,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  89,
      'ingredient' => '15 ml Gin',
      'cocktail_id' => 19,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  90,
      'ingredient' => '15 ml Triple sec',
      'cocktail_id' => 19,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  91,
      'ingredient' => '90 ml Cola',
      'cocktail_id' => 19,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  92,
      'ingredient' => '2 Lemon Wedge',
      'cocktail_id' => 19,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  93,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 19,
    ]);

      //Emerald Isle
      DB::table('ingredienten')->insert([
      'id' =>  94,
      'ingredient' => '30 ml Gin',
      'cocktail_id' => 20,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  95,
      'ingredient' => '1 tsp Green Crème de Menthe',
      'cocktail_id' => 20,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  96,
      'ingredient' => '2 dash Angostura Bitters',
      'cocktail_id' => 20,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  97,
      'ingredient' => 'Ice',
      'cocktail_id' => 20,
    ]);
      //Espresso Martini
      DB::table('ingredienten')->insert([
      'id' =>  98,
      'ingredient' => '40 ml Vodka',
      'cocktail_id' => 21,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  99,
      'ingredient' => '10 ml Coffee Liquer',
      'cocktail_id' => 21,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  100,
      'ingredient' => '20 ml Simple Syrup',
      'cocktail_id' => 21,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  101,
      'ingredient' => '45 ml Coffee',
      'cocktail_id' => 21,
    ]);

      //Fitzgerald
      DB::table('ingredienten')->insert([
      'id' =>  102,
      'ingredient' => '60 ml Beefeater Gin',
      'cocktail_id' => 22,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  103,
      'ingredient' => '22.5 ml Lemon Juice',
      'cocktail_id' => 22,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  104,
      'ingredient' => '30 ml Simple Syrup',
      'cocktail_id' => 22,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  105,
      'ingredient' => '2 dash Angostura Bitters',
      'cocktail_id' => 22,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  106,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 22,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  107,
      'ingredient' => 'Lemon Wedge',
      'cocktail_id' => 22,
    ]);

      //Freddy Fudpucker
      DB::table('ingredienten')->insert([
      'id' =>  108,
      'ingredient' => '45 ml Tequila',
      'cocktail_id' => 23,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  109,
      'ingredient' => '15 ml Galliano',
      'cocktail_id' => 23,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  110,
      'ingredient' => '150 ml Orange Juice',
      'cocktail_id' => 23,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  111,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 23,
    ]);

      //French 75
      DB::table('ingredienten')->insert([
      'id' =>  112,
      'ingredient' => '30 ml Gin',
      'cocktail_id' => 24,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  113,
      'ingredient' => '60 ml Champagne',
      'cocktail_id' => 24,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  114,
      'ingredient' => '15 ml Lemon Juice',
      'cocktail_id' => 24,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  115,
      'ingredient' => '2 dash Simple Syrup',
      'cocktail_id' => 24,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  116,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 24,
    ]);

      //French Martini
      DB::table('ingredienten')->insert([
      'id' =>  117,
      'ingredient' => '60 ml Vodka',
      'cocktail_id' => 25,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  118,
      'ingredient' => '50 ml Pineapple Juice',
      'cocktail_id' => 25,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  119,
      'ingredient' => '7,5 ml Raspberry Liquer',
      'cocktail_id' => 25,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  120,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 25,
    ]);

      //God Father
      DB::table('ingredienten')->insert([
      'id' =>  121,
      'ingredient' => '35 ml Scotch Whisky',
      'cocktail_id' => 26,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  122,
      'ingredient' => '35 ml Amaretto',
      'cocktail_id' => 26,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  123,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 26,
    ]);

      //God Mother
      DB::table('ingredienten')->insert([
      'id' =>  124,
      'ingredient' => '35 ml Vodka',
      'cocktail_id' => 27,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  125,
      'ingredient' => '35 ml Amaretto',
      'cocktail_id' => 27,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  126,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 27,
    ]);

      //Golden Dream
      DB::table('ingredienten')->insert([
      'id' =>  127,
      'ingredient' => '20 ml Galliano',
      'cocktail_id' => 28,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  128,
      'ingredient' => '20 ml Triple sec',
      'cocktail_id' => 28,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  129,
      'ingredient' => '20 ml Orange Juice',
      'cocktail_id' => 28,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  130,
      'ingredient' => '10 ml Cream',
      'cocktail_id' => 28,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  131,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 28,
    ]);

      //Grasshopper
      DB::table('ingredienten')->insert([
      'id' =>  132,
      'ingredient' => '30 ml White Crème de Cacao',
      'cocktail_id' => 29,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  133,
      'ingredient' => '30 ml Green Crème de Menthe',
      'cocktail_id' => 29,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  134,
      'ingredient' => '30 ml Cream',
      'cocktail_id' => 29,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  135,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 29,
    ]);

      //Harvey Wallbanger
      DB::table('ingredienten')->insert([
      'id' =>  136,
      'ingredient' => '45 ml Vodka',
      'cocktail_id' => 30,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  137,
      'ingredient' => '15 ml Galliano',
      'cocktail_id' => 30,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  138,
      'ingredient' => '90 ml Orange Juice',
      'cocktail_id' => 30,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  139,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 30,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  140,
      'ingredient' => 'Orange Wedge',
      'cocktail_id' => 30,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  141,
      'ingredient' => 'Cocktail Cherry',
      'cocktail_id' => 30,
    ]);

      //Hemmingway Daiquiri
      DB::table('ingredienten')->insert([
      'id' =>  142,
      'ingredient' => '60 ml White Rum',
      'cocktail_id' => 31,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  143,
      'ingredient' => '40 ml Grapefruit Juice',
      'cocktail_id' => 31,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  144,
      'ingredient' => '15 ml Maraschino Liquer',
      'cocktail_id' => 31,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  145,
      'ingredient' => '15 ml Lime Juice',
      'cocktail_id' => 31,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  146,
      'ingredient' => 'Ice',
      'cocktail_id' => 31,
    ]);

      //Horse Neck
      DB::table('ingredienten')->insert([
      'id' =>  147,
      'ingredient' => '40 ml Brandy',
      'cocktail_id' => 32,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  148,
      'ingredient' => '120 ml Ginger Ale',
      'cocktail_id' => 32,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  149,
      'ingredient' => '1 dash Angostura Bitters',
      'cocktail_id' => 32,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  150,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 32,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  151,
      'ingredient' => 'Lemon Twist',
      'cocktail_id' => 32,
    ]);

      //Hurricane
      DB::table('ingredienten')->insert([
      'id' =>  152,
      'ingredient' => '30 ml White Rum',
      'cocktail_id' => 33,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  153,
      'ingredient' => '30 ml Dark Rum',
      'cocktail_id' => 33,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  154,
      'ingredient' => '15 ml Galliano',
      'cocktail_id' => 33,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  155,
      'ingredient' => '22.5 ml Lime Juice',
      'cocktail_id' => 33,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  156,
      'ingredient' => '60 ml Orange Juice',
      'cocktail_id' => 33,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  157,
      'ingredient' => '60 ml Pineapple Juice',
      'cocktail_id' => 33,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  158,
      'ingredient' => '30 ml Simple Syrup',
      'cocktail_id' => 33,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  159,
      'ingredient' => '1 pinchPassion Fruit Syrup',
      'cocktail_id' => 33,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  160,
      'ingredient' => '1 dash Angostura Bitters',
      'cocktail_id' => 33,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  161,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 33,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  162,
      'ingredient' => 'Orange Slice',
      'cocktail_id' => 33,
    ]);

      //Irish Buck
      DB::table('ingredienten')->insert([
      'id' =>  163,
      'ingredient' => '45 ml Irish Whiskey',
      'cocktail_id' => 34,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  164,
      'ingredient' => '150 ml Ginger Ale',
      'cocktail_id' => 34,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  165,
      'ingredient' => 'Ice',
      'cocktail_id' => 34,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  166,
      'ingredient' => 'Lemon Twist',
      'cocktail_id' => 34,
    ]);

      //Irish Eyes
      DB::table('ingredienten')->insert([
      'id' =>  167,
      'ingredient' => '30 ml Irish Whiskey',
      'cocktail_id' => 35,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  168,
      'ingredient' => '7.5 ml Green Crème de Menthe',
      'cocktail_id' => 35,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  169,
      'ingredient' => '60 ml Cream',
      'cocktail_id' => 35,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  170,
      'ingredient' => 'Ice',
      'cocktail_id' => 35,
    ]);

      //Irish Flag
      DB::table('ingredienten')->insert([
      'id' =>  171,
      'ingredient' => '20 ml Baileys Irish Cream Liquer',
      'cocktail_id' => 36,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  172,
      'ingredient' => '20 ml Green Crème de Menthe',
      'cocktail_id' => 36,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  173,
      'ingredient' => '20 ml Grand Marnier',
      'cocktail_id' => 36,
    ]);

      //Island Breeze
      DB::table('ingredienten')->insert([
      'id' =>  174,
      'ingredient' => '45 ml White Rum',
      'cocktail_id' => 37,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  175,
      'ingredient' => '120 ml Pineapple Juice',
      'cocktail_id' => 37,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  176,
      'ingredient' => '30 ml Cranberry Juice',
      'cocktail_id' => 37,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  177,
      'ingredient' => '1 part Angostura Bitters',
      'cocktail_id' => 37,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  178,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 37,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  179,
      'ingredient' => 'Lime Wedge',
      'cocktail_id' => 37,
    ]);

      //Jack Rose
      DB::table('ingredienten')->insert([
      'id' =>  180,
      'ingredient' => '60 ml Lairds Straight Apple Brandy',
      'cocktail_id' => 38,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  181,
      'ingredient' => '22.5 ml Lemon Juice',
      'cocktail_id' => 38,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  182,
      'ingredient' => '22.5 ml Grenadine',
      'cocktail_id' => 38,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  183,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 38,
    ]);

      //John Collins
      DB::table('ingredienten')->insert([
      'id' =>  184,
      'ingredient' => '45 ml Gin',
      'cocktail_id' => 39,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  185,
      'ingredient' => '30 ml Lemon Juice',
      'cocktail_id' => 39,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  186,
      'ingredient' => '60 ml Club Soda',
      'cocktail_id' => 39,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  187,
      'ingredient' => '15 ml Simple Syrup',
      'cocktail_id' => 39,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  188,
      'ingredient' => '1 dash Angostura Bitters',
      'cocktail_id' => 39,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  189,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 39,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  190,
      'ingredient' => 'Lemon Slice',
      'cocktail_id' => 39,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  191,
      'ingredient' => 'Cocktail Cherry',
      'cocktail_id' => 39,
    ]);

      //Kamikaze
      DB::table('ingredienten')->insert([
      'id' =>  192,
      'ingredient' => '30 ml Vodka',
      'cocktail_id' => 40,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  193,
      'ingredient' => '30 ml Triple sec',
      'cocktail_id' => 40,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  194,
      'ingredient' => '30 ml Lime Juice',
      'cocktail_id' => 40,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  195,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 40,
    ]);

      //Kamikaze Shot
      DB::table('ingredienten')->insert([
      'id' =>  196,
      'ingredient' => '15 ml Vodka',
      'cocktail_id' => 41,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  197,
      'ingredient' => '15 ml Triple sec',
      'cocktail_id' => 41,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  198,
      'ingredient' => '15 ml Lime Juice',
      'cocktail_id' => 41,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  199,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 41,
    ]);

      //Kentucky Buck
      DB::table('ingredienten')->insert([
      'id' =>  200,
      'ingredient' => '60 ml Bourbon',
      'cocktail_id' => 42,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  201,
      'ingredient' => '22.5 Lemon Juice',
      'cocktail_id' => 42,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  202,
      'ingredient' => '16 ml Simple Syrup',
      'cocktail_id' => 42,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  203,
      'ingredient' => '90 ml Ginger Beer',
      'cocktail_id' => 42,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  204,
      'ingredient' => '2 dash Angostura Bitters',
      'cocktail_id' => 42,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  205,
      'ingredient' => '1 Strawberry',
      'cocktail_id' => 42,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  206,
      'ingredient' => 'Ice',
      'cocktail_id' => 42,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  207,
      'ingredient' => 'Lemon wheel',
      'cocktail_id' => 42,
    ]);

      //Kir
      DB::table('ingredienten')->insert([
      'id' =>  208,
      'ingredient' => '90 ml White Wine',
      'cocktail_id' => 43,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  209,
      'ingredient' => '10 ml Crème de cassis',
      'cocktail_id' => 43,
    ]);

      //Lemon Drop Martini
      DB::table('ingredienten')->insert([
      'id' =>  210,
      'ingredient' => '25 ml Citrus Vodka',
      'cocktail_id' => 44,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  211,
      'ingredient' => '20 ml Triple sec',
      'cocktail_id' => 44,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  212,
      'ingredient' => '15 ml Lemon Juice',
      'cocktail_id' => 44,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  213,
      'ingredient' => 'Lemon Slice',
      'cocktail_id' => 44,
    ]);

      //Lemonade
      DB::table('ingredienten')->insert([
      'id' =>  214,
      'ingredient' => '22.5 ml Lemon Juice',
      'cocktail_id' => 45,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  215,
      'ingredient' => '45 ml Simple Syrup',
      'cocktail_id' => 45,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  216,
      'ingredient' => '150 ml Water',
      'cocktail_id' => 45,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  217,
      'ingredient' => 'Ice',
      'cocktail_id' => 45,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  218,
      'ingredient' => 'Lemon Wedge',
      'cocktail_id' => 45,
    ]);

      //lime Rickey
      DB::table('ingredienten')->insert([
      'id' =>  219,
      'ingredient' => '22.5 ml Lime Juice',
      'cocktail_id' => 46,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  220,
      'ingredient' => '30 ml Simple Syrup',
      'cocktail_id' => 46,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  221,
      'ingredient' => '3 dash Angostura Bitters',
      'cocktail_id' => 46,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  222,
      'ingredient' => '1 Club Soda',
      'cocktail_id' => 46,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  223,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 46,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  224,
      'ingredient' => 'Lime Twist',
      'cocktail_id' => 46,
    ]);

      //Long Island Iced Tea
      DB::table('ingredienten')->insert([
      'id' =>  225,
      'ingredient' => '15 ml Gin',
      'cocktail_id' => 47,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  226,
      'ingredient' => '15 ml Tequila',
      'cocktail_id' => 47,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  227,
      'ingredient' => '15 ml Vodka',
      'cocktail_id' => 47,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  228,
      'ingredient' => '15 ml White Rum',
      'cocktail_id' => 47,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  229,
      'ingredient' => '15 ml Triple sec',
      'cocktail_id' => 47,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  230,
      'ingredient' => '30 ml Simple Syrup',
      'cocktail_id' => 47,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  231,
      'ingredient' => '25 ml Lemon Juice',
      'cocktail_id' => 47,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  232,
      'ingredient' => '1 dash Cola',
      'cocktail_id' => 47,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  233,
      'ingredient' => 'Ice',
      'cocktail_id' => 47,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  234,
      'ingredient' => 'Lemon Twist',
      'cocktail_id' => 47,
    ]);

      // Mai Tai
      DB::table('ingredienten')->insert([
      'id' =>  235,
      'ingredient' => '30 ml White Rum',
      'cocktail_id' => 48,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  236,
      'ingredient' => '30 ml Dark Rum',
      'cocktail_id' => 48,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  237,
      'ingredient' => '15 ml Orange Curacao',
      'cocktail_id' => 48,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  238,
      'ingredient' => '30 ml Lime Juice',
      'cocktail_id' => 48,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  239,
      'ingredient' => '15 ml Orgeat Syrup',
      'cocktail_id' => 48,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  240,
      'ingredient' => '7.5 ml Simple Syrup',
      'cocktail_id' => 48,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  241,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 48,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  242,
      'ingredient' => 'Mint Leaves',
      'cocktail_id' => 48,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  243,
      'ingredient' => 'Pineapple Wedge',
      'cocktail_id' => 48,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  244,
      'ingredient' => 'Lime Peel',
      'cocktail_id' => 48,
    ]);

      //Manhattan
      DB::table('ingredienten')->insert([
      'id' =>  245,
      'ingredient' => '50 ml Rye Whiskey',
      'cocktail_id' => 49,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  246,
      'ingredient' => '20 ml Sweet Vermouth',
      'cocktail_id' => 49,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  247,
      'ingredient' => '1 dash Angostura Bitters',
      'cocktail_id' => 49,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  248,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 49,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  249,
      'ingredient' => 'Cocktail Cherry',
      'cocktail_id' => 49,
    ]);

      //Margarita
      DB::table('ingredienten')->insert([
      'id' =>  250,
      'ingredient' => '35 ml Tequila',
      'cocktail_id' => 50,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  251,
      'ingredient' => '20 ml Cointreau',
      'cocktail_id' => 50,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  252,
      'ingredient' => '15 ml Lime Juice',
      'cocktail_id' => 50,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  253,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 50,
    ]);

      //Mimosa
      DB::table('ingredienten')->insert([
      'id' =>  254,
      'ingredient' => '80 ml Orange Juice',
      'cocktail_id' => 51,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  255,
      'ingredient' => '80 ml Champagne',
      'cocktail_id' => 51,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  256,
      'ingredient' => 'Orange Twist',
      'cocktail_id' => 51,
    ]);

      // Negroni
      DB::table('ingredienten')->insert([
      'id' =>  257,
      'ingredient' => '30 ml Gin',
      'cocktail_id' => 52,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  258,
      'ingredient' => '30 ml Sweet Vermouth',
      'cocktail_id' => 52,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  259,
      'ingredient' => '30 ml Campari',
      'cocktail_id' => 52,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  260,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 52,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  261,
      'ingredient' => 'Orange Wedge',
      'cocktail_id' => 52,
    ]);

      //Nutty Irishman
      DB::table('ingredienten')->insert([
      'id' =>  262,
      'ingredient' => '30 ml Baileys Irish Cream Liquer',
      'cocktail_id' => 53,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  263,
      'ingredient' => '30 ml Frangelico',
      'cocktail_id' => 53,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  264,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 53,
    ]);

      //Old Fashioned
      DB::table('ingredienten')->insert([
      'id' =>  265,
      'ingredient' => '45 ml Bourbon',
      'cocktail_id' => 54,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  266,
      'ingredient' => '2 dashes Angostura Bitters',
      'cocktail_id' => 54,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  267,
      'ingredient' => '2 dashes Water',
      'cocktail_id' => 54,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  268,
      'ingredient' => '1 Sugar Cube',
      'cocktail_id' => 54,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  269,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 54,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  270,
      'ingredient' => 'Orange Slice',
      'cocktail_id' => 54,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  271,
      'ingredient' => 'Cocktail Cherry',
      'cocktail_id' => 54,
    ]);

      //Old Pal
      DB::table('ingredienten')->insert([
      'id' =>  272,
      'ingredient' => '30 ml Rye Whiskey',
      'cocktail_id' => 55,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  273,
      'ingredient' => '30 ml Dry Vermouth',
      'cocktail_id' => 55,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  274,
      'ingredient' => '30 ml Campari',
      'cocktail_id' => 55,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  275,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 55,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  276,
      'ingredient' => 'Orange Twist',
      'cocktail_id' => 55,
    ]);

      //Orgasm
      DB::table('ingredienten')->insert([
      'id' =>  277,
      'ingredient' => '15 ml Amaretto',
      'cocktail_id' => 56,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  278,
      'ingredient' => '15 ml Baileys Irish Cream Liquer',
      'cocktail_id' => 56,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  279,
      'ingredient' => '15 ml Kahlúa Coffee Liquer',
      'cocktail_id' => 56,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  280,
      'ingredient' => 'Crushed Ice',
      'cocktail_id' => 56,
    ]);

      //Painkiller
      DB::table('ingredienten')->insert([
      'id' =>  281,
      'ingredient' => '45 ml White Rum',
      'cocktail_id' => 57,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  282,
      'ingredient' => '45 ml Pineapple Juice',
      'cocktail_id' => 57,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  283,
      'ingredient' => '15 ml Orange Juice',
      'cocktail_id' => 57,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  284,
      'ingredient' => '22.5 ml Coconut Cream',
      'cocktail_id' => 57,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  285,
      'ingredient' => 'Crushed Ice',
      'cocktail_id' => 57,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  286,
      'ingredient' => 'Nutmeg',
      'cocktail_id' => 57,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  287,
      'ingredient' => 'Mint sprig',
      'cocktail_id' => 57,
    ]);

      //Piña Colada
      DB::table('ingredienten')->insert([
      'id' =>  288,
      'ingredient' => '30 ml White Rum',
      'cocktail_id' => 58,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  289,
      'ingredient' => '30 ml Coconut Cream',
      'cocktail_id' => 58,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  290,
      'ingredient' => '90 ml Pineapple Juice',
      'cocktail_id' => 58,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  291,
      'ingredient' => 'Crushed Ice',
      'cocktail_id' => 58,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  292,
      'ingredient' => 'Pineapple Wedge',
      'cocktail_id' => 58,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  293,
      'ingredient' => 'Cocktail Cherry',
      'cocktail_id' => 58,
    ]);

      //Rob Roy
      DB::table('ingredienten')->insert([
      'id' =>  294,
      'ingredient' => '75 ml Famouse Grouse',
      'cocktail_id' => 59,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  295,
      'ingredient' => '22.5 ml Dolin Blanc Vermouth',
      'cocktail_id' => 59,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  296,
      'ingredient' => '2 dash Angostura Bitters',
      'cocktail_id' => 59,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  297,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 59,
      ]);

      DB::table('ingredienten')->insert([
      'id' =>  298,
      'ingredient' => 'Lemon Twist',
      'cocktail_id' => 59,
    ]);

      //Russian Spring Punch
      DB::table('ingredienten')->insert([
      'id' =>  299,
      'ingredient' => '25 ml Vodka',
      'cocktail_id' => 60,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  300,
      'ingredient' => '25 ml Lemon Juice',
      'cocktail_id' => 60,
    ]);
      DB::table('ingredienten')->insert([
      'id' =>  301,
      'ingredient' => '15 ml Crème de Cassis',
      'cocktail_id' => 60,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  302,
      'ingredient' => '10 ml Simple Syrup',
      'cocktail_id' => 60,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  303,
      'ingredient' => '20 ml White Wine',
      'cocktail_id' => 60,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  304,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 60,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  305,
      'ingredient' => 'Lemon Slice',
      'cocktail_id' => 60,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  306,
      'ingredient' => 'Blackberry',
      'cocktail_id' => 60,
    ]);

      //Sangria
      DB::table('ingredienten')->insert([
      'id' =>  307,
      'ingredient' => '120 ml Red Wine',
      'cocktail_id' => 61,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  308,
      'ingredient' => '30 ml Brandy',
      'cocktail_id' => 61,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  309,
      'ingredient' => '15 ml Orange Curacao',
      'cocktail_id' => 61,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  310,
      'ingredient' => '10 ml Lemon Juice',
      'cocktail_id' => 61,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  311,
      'ingredient' => '15 ml Grape Juice',
      'cocktail_id' => 61,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  312,
      'ingredient' => '15 ml Orange Juices',
      'cocktail_id' => 61,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  313,
      'ingredient' => '10 ml Simple Syrup',
      'cocktail_id' => 61,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  314,
      'ingredient' => '15 ml Club Soda',
      'cocktail_id' => 61,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  315,
      'ingredient' => '1 Orange Wheel',
      'cocktail_id' => 61,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  316,
      'ingredient' => '1 Lemon Wheel',
      'cocktail_id' => 61,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  317,
      'ingredient' => '1 Lime Wheel',
      'cocktail_id' => 61,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  318,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 61,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  319,
      'ingredient' => 'Orange Wheel',
      'cocktail_id' => 61,
    ]);

      //Sex on the Beach
      DB::table('ingredienten')->insert([
      'id' =>  320,
      'ingredient' => '40 ml Vodka',
      'cocktail_id' => 62,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  321,
      'ingredient' => '20 ml Peach Schnapps',
      'cocktail_id' => 62,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  322,
      'ingredient' => '1 dash Grenadine',
      'cocktail_id' => 62,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  323,
      'ingredient' => '40 ml Orange Juice',
      'cocktail_id' => 62,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  324,
      'ingredient' => '40 ml Cranberry Juice',
      'cocktail_id' => 62,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  325,
      'ingredient' => 'Crushed Ice',
      'cocktail_id' => 62,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  326,
      'ingredient' => 'Orange Wegde',
      'cocktail_id' => 62,
    ]);

      //Tequila Sunrise
      DB::table('ingredienten')->insert([
      'id' =>  327,
      'ingredient' => '45 ml Tequila',
      'cocktail_id' => 63,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  328,
      'ingredient' => '90 ml Orange Juice',
      'cocktail_id' => 63,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  329,
      'ingredient' => '15 ml Grenadine',
      'cocktail_id' => 63,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  330,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 63,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  331,
      'ingredient' => 'Orange Wedge',
      'cocktail_id' => 63,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  332,
      'ingredient' => 'Cocktail Cherry',
      'cocktail_id' => 63,
    ]);

      //Tipperary
      DB::table('ingredienten')->insert([
      'id' =>  333,
      'ingredient' => '60 ml Irish Whiskey',
      'cocktail_id' => 64,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  334,
      'ingredient' => '30 ml Carpona Antica Formula Vermouth',
      'cocktail_id' => 64,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  335,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 64,
    ]);

      //Vampiro
      DB::table('ingredienten')->insert([
      'id' =>  336,
      'ingredient' => '50 ml Tequila',
      'cocktail_id' => 65,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  337,
      'ingredient' => '80 ml Tomato Juice',
      'cocktail_id' => 65,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  338,
      'ingredient' => '30 ml Orange Juice',
      'cocktail_id' => 65,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  339,
      'ingredient' => '10 ml Lime Juice',
      'cocktail_id' => 65,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  340,
      'ingredient' => '1 tsp Honey Syrup',
      'cocktail_id' => 65,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  341,
      'ingredient' => '0.5 piece Onion',
      'cocktail_id' => 65,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  342,
      'ingredient' => '2 pieces Chili Pepper',
      'cocktail_id' => 65,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  343,
      'ingredient' => '3 drops Worcestershire Sauce',
      'cocktail_id' => 65,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  344,
      'ingredient' => '1 pinch Salt',
      'cocktail_id' => 65,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  345,
      'ingredient' => 'Crushed Ice',
      'cocktail_id' => 65,
    ]);

      //Vesper
      DB::table('ingredienten')->insert([
      'id' =>  346,
      'ingredient' => '45 ml Gin',
      'cocktail_id' => 66,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  347,
      'ingredient' => '15 ml Vodka',
      'cocktail_id' => 66,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  348,
      'ingredient' => '7.5 ml Lillet Blanc',
      'cocktail_id' => 66,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  349,
      'ingredient' => 'Ice',
      'cocktail_id' => 66,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  350,
      'ingredient' => 'Lemon Twist',
      'cocktail_id' => 66,
    ]);

      //Ward Eight
      DB::table('ingredienten')->insert([
      'id' =>  351,
      'ingredient' => '60 ml Bourbon',
      'cocktail_id' => 67,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  352,
      'ingredient' => '30 ml Simple Syrup',
      'cocktail_id' => 67,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  353,
      'ingredient' => '22.5 ml Lemon Juice',
      'cocktail_id' => 67,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  354,
      'ingredient' => '7.5 ml Grenadine',
      'cocktail_id' => 67,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  355,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 67,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  356,
      'ingredient' => 'Cocktail Cherry',
      'cocktail_id' => 67,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  357,
      'ingredient' => 'Orange Slice',
      'cocktail_id' => 67,
    ]);

      //White Lady
      DB::table('ingredienten')->insert([
      'id' =>  358,
      'ingredient' => '40 ml Gin',
      'cocktail_id' => 68,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  359,
      'ingredient' => '30 ml Triple sec',
      'cocktail_id' => 68,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  360,
      'ingredient' => '20 ml Lemon Juice',
      'cocktail_id' => 68,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  361,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 68,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  362,
      'ingredient' => 'Lemon Slice',
      'cocktail_id' => 68,
    ]);

      //Yellow Bird
      DB::table('ingredienten')->insert([
      'id' =>  363,
      'ingredient' => '30 ml White Rum',
      'cocktail_id' => 69,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  364,
      'ingredient' => '15 ml Galliano',
      'cocktail_id' => 69,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  365,
      'ingredient' => '15 ml Triple sec',
      'cocktail_id' => 69,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  366,
      'ingredient' => '15 ml Lime Juice',
      'cocktail_id' => 69,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  367,
      'ingredient' => 'Lemon Wedge',
      'cocktail_id' => 69,
    ]);

      //Zombie
      DB::table('ingredienten')->insert([
      'id' =>  368,
      'ingredient' => '30 ml Dark Rum',
      'cocktail_id' => 70,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  369,
      'ingredient' => '30 ml White Rum',
      'cocktail_id' => 70,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  370,
      'ingredient' => '30 ml Orange Curacao',
      'cocktail_id' => 70,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  371,
      'ingredient' => '15 ml Lemon Juice',
      'cocktail_id' => 70,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  372,
      'ingredient' => '15 ml Lime Juice',
      'cocktail_id' => 70,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  373,
      'ingredient' => '45 ml Orange Juice',
      'cocktail_id' => 70,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  374,
      'ingredient' => '15 ml Passion Fruit Syrup',
      'cocktail_id' => 70,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  375,
      'ingredient' => '7.5 ml Grenadine',
      'cocktail_id' => 70,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  376,
      'ingredient' => '2 dash Angostura Bitters',
      'cocktail_id' => 70,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  377,
      'ingredient' => 'Ice Cubes',
      'cocktail_id' => 70,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  378,
      'ingredient' => 'Orange Slice',
      'cocktail_id' => 70,
    ]);

      DB::table('ingredienten')->insert([
      'id' =>  379,
      'ingredient' => 'Pinapple Wedge',
      'cocktail_id' => 70,
    ]);

    DB::table('ingredienten')->insert([
    'id' =>  380,
    'ingredient' => '90 ml Orange Juice',
    'cocktail_id' => 71,
  ]);

  DB::table('ingredienten')->insert([
  'id' =>  381,
  'ingredient' => '45 ml Club Soda',
  'cocktail_id' => 71,
]);


DB::table('ingredienten')->insert([
'id' =>  382,
'ingredient' => '15 ml Simple Syrup',
'cocktail_id' => 71,
]);




    }
}
