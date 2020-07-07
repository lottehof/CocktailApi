<?php

use Illuminate\Database\Seeder;

class InstructiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //COCKTAIL 4TH OF JULY
      DB::table('instructies')->insert([
      'id' =>  1,
      'instructie' => 'Pour Grenadine into the Shot Glass',
      'cocktail_id' => 1,
    ]);

      DB::table('instructies')->insert([
      'id' =>  2,
      'instructie' => 'Gently layer the Vodka',
      'cocktail_id' => 1,
    ]);

      DB::table('instructies')->insert([
      'id' =>  3,
      'instructie' => 'Gently layer the Blue Curacao',
      'cocktail_id' => 1,
    ]);

      //Cocktail ABC POUSSE CAFE
      DB::table('instructies')->insert([
      'id' =>  4,
      'instructie' => 'Pour Amertto into the irish Coffee Glass',
      'cocktail_id' => 2,
    ]);

      DB::table('instructies')->insert([
      'id' =>  5,
      'instructie' => 'Gently layer the Baileys Irish Cream liqueur',
      'cocktail_id' => 2,
    ]);

      DB::table('instructies')->insert([
      'id' =>  6,
      'instructie' => 'Gently layer the Cointreau',
      'cocktail_id' => 2,
    ]);

      //COCKTAIL ABBEY COCKTAIL
      DB::table('instructies')->insert([
      'id' =>  7,
      'instructie' => 'Fill up the Shaker with Ice Cubes',
      'cocktail_id' => 3,
    ]);

      DB::table('instructies')->insert([
      'id' =>  8,
      'instructie' => 'Pour Gin, Lillet Blanc, Orange Juice, Angostrua Orange Bitters into Shaker',
      'cocktail_id' => 3,
      ]);

      DB::table('instructies')->insert([
      'id' =>  9,
      'instructie' => 'Shake well',
      'cocktail_id' => 3,
    ]);

      DB::table('instructies')->insert([
      'id' =>  10,
      'instructie' => 'Strain into the Glass',
      'cocktail_id' => 3,
    ]);

      //COCKTAIL ABSINTHE FRAPPE
      DB::table('instructies')->insert([
      'id' =>  11,
      'instructie' => 'Fill up the Old Fashioned Glass with crushed ice',
      'cocktail_id' => 4,
      ]);

      DB::table('instructies')->insert([
      'id' =>  12,
      'instructie' => 'Fill up the shaker with ice',
      'cocktail_id' => 4,
    ]);

      DB::table('instructies')->insert([
      'id' =>  13,
      'instructie' => 'Pour Absinthe, Simple Syrup and Water into the shaker',
      'cocktail_id' => 4,
    ]);

      DB::table('instructies')->insert([
      'id' =>  14,
      'instructie' => 'Shake well',
      'cocktail_id' => 4,
      ]);

      DB::table('instructies')->insert([
      'id' =>  15,
      'instructie' => 'Strain into the Old Fashioned Glass',
      'cocktail_id' => 4,
      ]);

      //BACARDI
      DB::table('instructies')->insert([
      'id' =>  16,
      'instructie' => 'Fill up Shaker with Ice Cubes',
      'cocktail_id' => 5,
    ]);

      DB::table('instructies')->insert([
      'id' =>  17,
      'instructie' => 'Pour Grenadine, Lime Juice, White Rum into the Shaker',
      'cocktail_id' => 5,
    ]);

      DB::table('instructies')->insert([
      'id' =>  18,
      'instructie' => 'Shake Well',
      'cocktail_id' => 5,
    ]);

      DB::table('instructies')->insert([
      'id' =>  19,
      'instructie' => 'Strain into the Cocktail Glass',
      'cocktail_id' => 5,
    ]);

      //BAHIA BREEZE
      DB::table('instructies')->insert([
      'id' =>  20,
      'instructie' => 'Fill up Glass with Ice Cubes',
      'cocktail_id' => 6,
    ]);

      DB::table('instructies')->insert([
      'id' =>  21,
      'instructie' => 'Add Tequila Reposado, Pineapple Juice, Cranberry Juice to the Glass',
      'cocktail_id' => 6,
    ]);

      DB::table('instructies')->insert([
      'id' =>  22,
      'instructie' => 'Garnish with Lime Wedge',
      'cocktail_id' => 6,
    ]);

      //COCKTAIL BANSHEE
      DB::table('instructies')->insert([
      'id' =>  23,
      'instructie' => 'Add Ice to the Shaker',
      'cocktail_id' => 7,
    ]);

      DB::table('instructies')->insert([
      'id' =>  24,
      'instructie' => 'Pour Banana Liquer, White Crème de Cacao, Heavy cream into the Shaker',
      'cocktail_id' => 7,
    ]);

      DB::table('instructies')->insert([
      'id' =>  25,
      'instructie' => 'Shake well',
      'cocktail_id' => 7,
    ]);

      DB::table('instructies')->insert([
      'id' =>  26,
      'instructie' => 'Strain into the Cocktail Glass',
      'cocktail_id' => 7,
    ]);

      //BARRACUDA
      DB::table('instructies')->insert([
      'id' =>  27,
      'instructie' => 'Pour Pineapple Juice, Lime Juice, Gold Rum, Galliano into the Collins Glass',
      'cocktail_id' => 8,
    ]);

      DB::table('instructies')->insert([
      'id' =>  28,
      'instructie' => 'Stir together',
      'cocktail_id' => 8,
    ]);

      DB::table('instructies')->insert([
      'id' =>  29,
      'instructie' => 'Fill up Glass with Prosecco',
      'cocktail_id' => 8,
    ]);

      DB::table('instructies')->insert([
      'id' =>  30,
      'instructie' => 'Garnish with Cocktail Cherry',
      'cocktail_id' => 8,
    ]);

      //CAPE GOD
      DB::table('instructies')->insert([
      'id' =>  31,
      'instructie' => 'Fill up Old Fashioned Glass with Ice',
      'cocktail_id' => 9,
    ]);

      DB::table('instructies')->insert([
      'id' =>  32,
      'instructie' => 'Pour Cranberry Juice, Vodka into the Glass',
      'cocktail_id' => 9,
    ]);

      DB::table('instructies')->insert([
      'id' =>  33,
      'instructie' => 'Stir together',
      'cocktail_id' => 9,
    ]);

      //CASINO
      DB::table('instructies')->insert([
      'id' =>  34,
      'instructie' => 'Add Ice Cubes to the Shaker',
      'cocktail_id' => 10,
    ]);

      DB::table('instructies')->insert([
      'id' =>  35,
      'instructie' => 'Add Orange Bitters, Lemon Juice, Gin, Maraschino Liquer to the Shaker',
      'cocktail_id' => 10,
    ]);

      DB::table('instructies')->insert([
      'id' =>  36,
      'instructie' => 'Shake Well',
      'cocktail_id' => 10,
    ]);

      DB::table('instructies')->insert([
      'id' =>  37,
      'instructie' => 'Strain into the Cocktail Glass',
      'cocktail_id' => 10,
    ]);

      DB::table('instructies')->insert([
      'id' =>  38,
      'instructie' => 'Garnish with Lemon Spiral, Cocktail Cherry',
      'cocktail_id' => 10,
    ]);

      //CAMPAGNE COBBLER
      DB::table('instructies')->insert([
      'id' =>  39,
      'instructie' => 'Add Orange Wedge, Lemon Wedge, Pineapple Wedge to the Mixing Glass',
      'cocktail_id' => 11,
    ]);

      DB::table('instructies')->insert([
      'id' =>  40,
      'instructie' => 'Pour Luxardo Maraschino Liquer into the Mixing Glass',
      'cocktail_id' => 11,
    ]);

      DB::table('instructies')->insert([
      'id' =>  41,
      'instructie' => 'Muddle gently',
      'cocktail_id' => 11,
    ]);

      DB::table('instructies')->insert([
      'id' =>  42,
      'instructie' => 'Pour Ice, Champagne into the Mixing Glass',
      'cocktail_id' => 11,
    ]);

      DB::table('instructies')->insert([
      'id' =>  43,
      'instructie' => 'Stir together',
      'cocktail_id' => 11,
    ]);

      DB::table('instructies')->insert([
      'id' =>  44,
      'instructie' => 'Strain into the Champagne Glass',
      'cocktail_id' => 11,
    ]);

      DB::table('instructies')->insert([
      'id' =>  45,
      'instructie' => 'Garnish with Orange Peel',
      'cocktail_id' => 11,
    ]);

      //CLOVER CLUB
      DB::table('instructies')->insert([
      'id' =>  46,
      'instructie' => 'Fill up Shaker with Ice Cubes',
      'cocktail_id' => 12,
    ]);

      DB::table('instructies')->insert([
      'id' =>  47,
      'instructie' => 'Add Raspberry Syrup, Lemon Juice, Gin, Egg White to the Shaker',
      'cocktail_id' => 12,
    ]);

      DB::table('instructies')->insert([
      'id' =>  48,
      'instructie' => 'Shake well',
      'cocktail_id' => 12,
    ]);

      DB::table('instructies')->insert([
      'id' =>  49,
      'instructie' => 'Strain into the Cocktail Glass',
      'cocktail_id' => 12,
    ]);

      //CUBBY BLUE
      DB::table('instructies')->insert([
      'id' =>  50,
      'instructie' => 'Pour Blue Curacao into the Shot Glass',
      'cocktail_id' => 13,
    ]);

      DB::table('instructies')->insert([
      'id' =>  51,
      'instructie' => 'Gently layer the bacardi ingredients',
      'cocktail_id' => 13,
    ]);

      DB::table('instructies')->insert([
      'id' =>  52,
      'instructie' => 'Gently layer the Grenadine',
      'cocktail_id' => 13,
    ]);

      //DAIQUIRI
      DB::table('instructies')->insert([
      'id' =>  53,
      'instructie' => 'Fill up Shaker with Ice',
      'cocktail_id' => 14,
    ]);

      DB::table('instructies')->insert([
      'id' =>  54,
      'instructie' => 'Pour Lime Juice, Simple Syrup, White Rum into the Shaker',
      'cocktail_id' => 14,
    ]);

      DB::table('instructies')->insert([
      'id' =>  55,
      'instructie' => 'Shake well',
      'cocktail_id' => 14,
    ]);

      DB::table('instructies')->insert([
      'id' =>  56,
      'instructie' => 'Strain into the Cocktail Glass',
      'cocktail_id' => 14,
    ]);

      DB::table('instructies')->insert([
      'id' =>  57,
      'instructie' => 'Garnish with Lime Slice',
      'cocktail_id' => 14,
    ]);

      //DARK AND STORMY
      DB::table('instructies')->insert([
      'id' =>  58,
      'instructie' => 'Fill up Collins Glass with Ice Cubes',
      'cocktail_id' => 15,
    ]);

      DB::table('instructies')->insert([
      'id' =>  59,
      'instructie' => 'Pour Dark Rum into the Collins Glass',
      'cocktail_id' => 15,
    ]);

      DB::table('instructies')->insert([
      'id' =>  60,
      'instructie' => 'Pour Ginger Beer into the Collins Glass',
      'cocktail_id' => 15,
    ]);

      DB::table('instructies')->insert([
      'id' =>  61,
      'instructie' => 'Garnish with Lime Wedge',
      'cocktail_id' => 15,
    ]);

      //DE LA LOUISIANE
      DB::table('instructies')->insert([
      'id' =>  62,
      'instructie' => 'Fill up Mixing Glass with Ice',
      'cocktail_id' => 16,
    ]);

      DB::table('instructies')->insert([
      'id' =>  63,
      'instructie' => 'Pour, Rye Whiskey, Dolin Blanc Vermouth, Benedictine D.O.M., Absinthe, Peychauds Bitters into the Mixing Glass',
      'cocktail_id' => 16,
    ]);

      DB::table('instructies')->insert([
      'id' =>  64,
      'instructie' => 'Stir together',
      'cocktail_id' => 16,
    ]);

      DB::table('instructies')->insert([
      'id' =>  65,
      'instructie' => 'Strain into the Cocktail Glass',
      'cocktail_id' => 16,
    ]);

      DB::table('instructies')->insert([
      'id' =>  66,
      'instructie' => 'Garnish with Cocktail Cherry',
      'cocktail_id' => 16,
    ]);

      //DERBY
      DB::table('instructies')->insert([
      'id' =>  67,
      'instructie' => 'Add Ice Cubes to the Mixer Glass',
      'cocktail_id' => 17,
    ]);

      DB::table('instructies')->insert([
      'id' =>  68,
      'instructie' => 'Pour Orange Bitters, Gin into the Mixer Glass',
      'cocktail_id' => 17,
    ]);

      DB::table('instructies')->insert([
      'id' =>  69,
      'instructie' => 'Stir together',
      'cocktail_id' => 17,
    ]);

      DB::table('instructies')->insert([
      'id' =>  70,
      'instructie' => 'Strain into the Cocktail',
      'cocktail_id' => 17,
    ]);

      DB::table('instructies')->insert([
      'id' =>  71,
      'instructie' => 'Garnish with Mint Leaves',
      'cocktail_id' => 17,
    ]);

      //EL PRESIDENTE
      DB::table('instructies')->insert([
      'id' =>  72,
      'instructie' => 'Pour White Rum, Dry Vermouth, Pierre Ferrand Dry Curacao, Grenadine into the Shaker',
      'cocktail_id' => 18,
    ]);

      DB::table('instructies')->insert([
      'id' =>  73,
      'instructie' => 'Fill the Shaker with Ice',
      'cocktail_id' => 18,
    ]);

      DB::table('instructies')->insert([
      'id' =>  74,
      'instructie' => 'Shake well',
      'cocktail_id' => 18,
    ]);

      DB::table('instructies')->insert([
      'id' =>  75,
      'instructie' => 'Strain into the Glass',
      'cocktail_id' => 18,
    ]);

    //ELECTRIC ICED TEA
    DB::table('instructies')->insert([
    'id' =>  76,
    'instructie' => 'Add ice cubes to the collins glass',
    'cocktail_id' => 19,
  ]);

    DB::table('instructies')->insert([
    'id' =>  77,
    'instructie' => 'Pour bourbon, Vodka, gin, triple sec and cola into the collins glass',
    'cocktail_id' => 19,
  ]);

    DB::table('instructies')->insert([
    'id' =>  78,
    'instructie' => 'Add lemon wedge to the collins glass',
    'cocktail_id' => 19,
  ]);

    DB::table('instructies')->insert([
    'id' =>  79,
    'instructie' => 'stir together',
    'cocktail_id' => 19,
  ]);

    //EMERALD ISLE
    DB::table('instructies')->insert([
    'id' =>  80,
    'instructie' => 'Fill up the shaker with ice',
    'cocktail_id' => 20,
  ]);

    DB::table('instructies')->insert([
    'id' =>  81,
    'instructie' => 'Pour Angostura bitters, Green crème de Menthe and gin into the shaker',
    'cocktail_id' => 20,
  ]);

    DB::table('instructies')->insert([
    'id' =>  82,
    'instructie' => 'Shake well',
    'cocktail_id' => 20,
  ]);

    DB::table('instructies')->insert([
    'id' =>  83,
    'instructie' => 'Strain into the cocktail glass',
    'cocktail_id' => 20,
  ]);

    //Espresso Martini
    DB::table('instructies')->insert([
    'id' =>  84,
    'instructie' => 'Fill up the shaker with ice cubes',
    'cocktail_id' => 21,
  ]);

    DB::table('instructies')->insert([
    'id' =>  85,
    'instructie' => 'Pour vodka, simple syrup, coffe liqueur and coffee into the shaker',
    'cocktail_id' => 21,
  ]);

    DB::table('instructies')->insert([
    'id' =>  86,
    'instructie' => 'Shake well',
    'cocktail_id' => 21,
  ]);

    DB::table('instructies')->insert([
    'id' =>  87,
    'instructie' => 'Strain into the cocktail glass',
    'cocktail_id' => 21,
  ]);

    //fitzgerald
    DB::table('instructies')->insert([
    'id' =>  88,
    'instructie' => 'Fill up the shaker with ice cubes',
    'cocktail_id' => 22,
  ]);

    DB::table('instructies')->insert([
    'id' =>  89,
    'instructie' => 'Pour beefeater gin, lemon juice, simple syrup and angostura bitter into the shaker',
    'cocktail_id' => 22,
  ]);

  DB::table('instructies')->insert([
  'id' =>  90,
  'instructie' => 'Shake well',
  'cocktail_id' => 22,
]);

DB::table('instructies')->insert([
'id' =>  91,
'instructie' => 'Strain into the glass',
'cocktail_id' => 22,
]);

DB::table('instructies')->insert([
'id' =>  92,
'instructie' => 'Garnish with lemon wedge',
'cocktail_id' => 22,
]);

//Freddy Fudpucker
DB::table('instructies')->insert([
'id' =>  93,
'instructie' => 'Fill up the Collins Glass with ice',
'cocktail_id' => 23,
]);

DB::table('instructies')->insert([
'id' =>  94,
'instructie' => 'Pour orange juice and tequila into the glass',
'cocktail_id' => 23,
]);

DB::table('instructies')->insert([
'id' =>  95,
'instructie' => 'stir together',
'cocktail_id' => 23,
]);

DB::table('instructies')->insert([
'id' =>  96,
'instructie' => 'Pour Galliano into the glass',
'cocktail_id' => 23,
]);

//French 75
DB::table('instructies')->insert([
'id' =>  97,
'instructie' => 'Fill up the shaker with ice cubes',
'cocktail_id' => 24,
]);

DB::table('instructies')->insert([
'id' =>  98,
'instructie' => 'Pour Lemon juicem, simple syrup and gin into the shaker',
'cocktail_id' => 24,
]);

DB::table('instructies')->insert([
'id' =>  99,
'instructie' => 'shake well',
'cocktail_id' => 24,
]);

DB::table('instructies')->insert([
'id' =>  100,
'instructie' => 'Strain into the champagne glass',
'cocktail_id' => 24,
]);

DB::table('instructies')->insert([
'id' =>  101,
'instructie' => 'Fill up the glass with campagne',
'cocktail_id' => 24,
]);

//French martini
DB::table('instructies')->insert([
'id' =>  102,
'instructie' => 'Fill up the shaker with the ice cubes',
'cocktail_id' => 25,
]);

DB::table('instructies')->insert([
'id' =>  103,
'instructie' => 'Add vodka, pineapple juice and raspberry liqueur to the shaker',
'cocktail_id' => 25,
]);

DB::table('instructies')->insert([
'id' =>  104,
'instructie' => 'Shake well',
'cocktail_id' => 25,
]);

DB::table('instructies')->insert([
'id' =>  105,
'instructie' => 'Strain into the cocktail glass',
'cocktail_id' => 25,
]);

//God father
DB::table('instructies')->insert([
'id' =>  106,
'instructie' => 'Fill up the Old Fashioned glass with ice',
'cocktail_id' => 26,
]);

DB::table('instructies')->insert([
'id' =>  107,
'instructie' => 'Pour amaretto and Scotch Whisky into the glass',
'cocktail_id' => 26,
]);

DB::table('instructies')->insert([
'id' =>  108,
'instructie' => 'Stir together',
'cocktail_id' => 26,
]);

//God mother
DB::table('instructies')->insert([
'id' =>  109,
'instructie' => 'Fill up the Old Fashioned glass with ice',
'cocktail_id' => 27,
]);

DB::table('instructies')->insert([
'id' =>  110,
'instructie' => 'Pour Amaretto and Vodka into the glass',
'cocktail_id' => 27,
]);

DB::table('instructies')->insert([
'id' =>  111,
'instructie' => 'Stir together',
'cocktail_id' => 27,
]);

//Golden dream
DB::table('instructies')->insert([
'id' =>  112,
'instructie' => 'Fill up the shaker with ice cubes',
'cocktail_id' => 28,
]);

DB::table('instructies')->insert([
'id' =>  113,
'instructie' => 'Add orange juice, cream, triple sec and galliano to the shaker',
'cocktail_id' => 28,
]);

DB::table('instructies')->insert([
'id' =>  114,
'instructie' => 'Shake well',
'cocktail_id' => 28,
]);

DB::table('instructies')->insert([
'id' =>  115,
'instructie' => 'Strain into the cocktail glass',
'cocktail_id' => 28,
]);

//Grasshopper

DB::table('instructies')->insert([
'id' =>  116,
'instructie' => 'Fill up the shaker with ice cubes',
'cocktail_id' => 29,
]);

DB::table('instructies')->insert([
'id' =>  117,
'instructie' => 'Pour cream, White Creme de cacoa and green Crème de Menthe into the shaker',
'cocktail_id' => 29,
]);

DB::table('instructies')->insert([
'id' =>  118,
'instructie' => 'Shake well',
'cocktail_id' => 29,
]);

DB::table('instructies')->insert([
'id' =>  119,
'instructie' => 'Strain into the cocktail glass',
'cocktail_id' => 29,
]);

//Harvey Wallbanger
DB::table('instructies')->insert([
'id' =>  120,
'instructie' => 'Fill up the colinns glass with ice',
'cocktail_id' => 30,
]);

DB::table('instructies')->insert([
'id' =>  121,
'instructie' => 'Pour orange juice and vodka into the glass',
'cocktail_id' => 30,
]);

DB::table('instructies')->insert([
'id' =>  122,
'instructie' => 'Stir together',
'cocktail_id' => 30,
]);

DB::table('instructies')->insert([
'id' =>  123,
'instructie' => 'Add galliano drop by drop',
'cocktail_id' => 30,
]);

DB::table('instructies')->insert([
'id' =>  124,
'instructie' => 'Garnish with cocktail cherry and orange wedge',
'cocktail_id' => 30,
]);

//Hemmingway DAIQUIRI
DB::table('instructies')->insert([
'id' =>  125,
'instructie' => 'Add ice to the shaker',
'cocktail_id' => 31,
]);

DB::table('instructies')->insert([
'id' =>  126,
'instructie' => 'Pour white rum, lime juice, grapefruit and maraschino liqueur into the shaker',
'cocktail_id' => 31,
]);

DB::table('instructies')->insert([
'id' =>  127,
'instructie' => 'Shake well',
'cocktail_id' => 31,
]);

DB::table('instructies')->insert([
'id' =>  128,
'instructie' => 'Strain into the cocktail glass',
'cocktail_id' => 31,
]);

//Horse neck
DB::table('instructies')->insert([
'id' =>  129,
'instructie' => 'Fill up the collins glass with ice',
'cocktail_id' => 32,
]);

DB::table('instructies')->insert([
'id' =>  130,
'instructie' => 'Pour ginger ale and brandy into the glass',
'cocktail_id' => 32,
]);

DB::table('instructies')->insert([
'id' =>  131,
'instructie' => 'Stir together',
'cocktail_id' => 32,
]);

DB::table('instructies')->insert([
'id' =>  132,
'instructie' => 'Add Angostura Bitters drop by drop',
'cocktail_id' => 32,
]);

DB::table('instructies')->insert([
'id' =>  133,
'instructie' => 'garnish with Lemon Spiral',
'cocktail_id' => 32,
]);

//Hurricane
DB::table('instructies')->insert([
'id' =>  134,
'instructie' => 'Pour white rum, dark rum, galliano, lime juice, orange juice, pineapple juice, simple syrup, passion fruit syrup and Angostura Bitters into the shaker',
'cocktail_id' => 33,
]);

DB::table('instructies')->insert([
'id' =>  135,
'instructie' => 'Fill up the shaker with ice',
'cocktail_id' => 33,
]);

DB::table('instructies')->insert([
'id' =>  136,
'instructie' => 'Shake well',
'cocktail_id' => 33,
]);

DB::table('instructies')->insert([
'id' =>  137,
'instructie' => 'Strain into the glass',
'cocktail_id' => 33,
]);

DB::table('instructies')->insert([
'id' =>  138,
'instructie' => 'Garnish with orange slice',
'cocktail_id' => 33,
]);

//Irish buck
DB::table('instructies')->insert([
'id' =>  139,
'instructie' => 'Fill up the collins glass with Ice',
'cocktail_id' => 34,
]);

DB::table('instructies')->insert([
'id' =>  140,
'instructie' => 'Pour Irish Whiskey into Collins glass',
'cocktail_id' => 34,
]);

DB::table('instructies')->insert([
'id' =>  141,
'instructie' => 'Fill up the Collins glass with Ginger Ale',
'cocktail_id' => 34,
]);

DB::table('instructies')->insert([
'id' =>  142,
'instructie' => 'Garnish with Lemon Twist',
'cocktail_id' => 34,
]);

//Irish Eyes
DB::table('instructies')->insert([
'id' =>  143,
'instructie' => 'Fill up the glass with ice',
'cocktail_id' => 35,
]);


DB::table('instructies')->insert([
'id' =>  144,
'instructie' => 'Fill up the shaker with ice',
'cocktail_id' => 35,
]);

DB::table('instructies')->insert([
'id' =>  145,
'instructie' => 'Pour Cream, Green Creme de Methe and Irish Whiskey into the Shaker',
'cocktail_id' => 35,
]);

DB::table('instructies')->insert([
'id' =>  146,
'instructie' => 'Shake well',
'cocktail_id' => 35,
]);

DB::table('instructies')->insert([
'id' =>  147,
'instructie' => 'Strain into the Old Fashioned glass',
'cocktail_id' => 35,
]);

DB::table('instructies')->insert([
'id' =>  148,
'instructie' => 'Garnish with cocktail cherry',
'cocktail_id' => 35,
]);

//Irish flag
DB::table('instructies')->insert([
'id' =>  149,
'instructie' => 'Pour Green Creme de Menthe into the glass',
'cocktail_id' => 36,
]);

DB::table('instructies')->insert([
'id' =>  150,
'instructie' => 'Gently layer the Baileys Irish Cream Liqueur',
'cocktail_id' => 36,
]);

DB::table('instructies')->insert([
'id' =>  151,
'instructie' => 'Gently layer the Grand Marnier',
'cocktail_id' => 36,
]);

//Island BREEZE
DB::table('instructies')->insert([
'id' =>  152,
'instructie' => 'Fill up the glass with ice cubes',
'cocktail_id' => 37,
]);

DB::table('instructies')->insert([
'id' =>  153,
'instructie' => 'Pour White Rum, Pineapple Juice, Cranberry and Angostura Bitters into the glass',
'cocktail_id' => 37,
]);

DB::table('instructies')->insert([
'id' =>  154,
'instructie' => 'Garnish with Lime Slice',
'cocktail_id' => 37,
]);

DB::table('instructies')->insert([
'id' =>  155,
'instructie' => 'Fill up the shaker with ice cubes',
'cocktail_id' => 38,
]);

DB::table('instructies')->insert([
'id' =>  156,
'instructie' => 'Pour Laids Straight Apple Brandy, Lemon Juice and Grenadine into the shaker',
'cocktail_id' => 38,
]);

DB::table('instructies')->insert([
'id' =>  157,
'instructie' => 'shake well',
'cocktail_id' => 38,
]);

DB::table('instructies')->insert([
'id' =>  158,
'instructie' => 'Strain into the Cocktail glass',
'cocktail_id' => 38,
]);

//John collins
DB::table('instructies')->insert([
'id' =>  159,
'instructie' => 'Fill up the collins glass with ice',
'cocktail_id' => 39,
]);

DB::table('instructies')->insert([
'id' =>  160,
'instructie' => 'Pour Lemon Juice, Simple Syrup and Gin into the glass',
'cocktail_id' => 39,
]);

DB::table('instructies')->insert([
'id' =>  161,
'instructie' => 'Stir together',
'cocktail_id' => 39,
]);

DB::table('instructies')->insert([
'id' =>  162,
'instructie' => 'Fill up the glass with club soda',
'cocktail_id' => 39,
]);

DB::table('instructies')->insert([
'id' =>  163,
'instructie' => 'Add Angostura Bitters drop by drop',
'cocktail_id' => 39,
]);

DB::table('instructies')->insert([
'id' =>  164,
'instructie' => 'Garnish with cocktail cherry and Lemon slice',
'cocktail_id' => 39,
]);

DB::table('instructies')->insert([
'id' =>  165,
'instructie' => 'Fill up the shaker with ice cubes',
'cocktail_id' => 40,
]);

DB::table('instructies')->insert([
'id' =>  166,
'instructie' => 'Pour vodka, Tprile sec and lime juice into the shaker',
'cocktail_id' => 40,
]);

DB::table('instructies')->insert([
'id' =>  167,
'instructie' => 'Shake well',
'cocktail_id' => 40,
]);

DB::table('instructies')->insert([
'id' =>  168,
'instructie' => 'Strain into the cocktail glass',
'cocktail_id' => 40,
]);

DB::table('instructies')->insert([
'id' =>  169,
'instructie' => 'Fill up the shaker with ice',
'cocktail_id' => 41,
]);

DB::table('instructies')->insert([
'id' =>  170,
'instructie' => 'Pour Lime Juice, Triple sec and Vodka into the shaker',
'cocktail_id' => 41,
]);

DB::table('instructies')->insert([
'id' =>  171,
'instructie' => 'Shake well',
'cocktail_id' => 41,
]);

DB::table('instructies')->insert([
'id' =>  172,
'instructie' => 'Strain into the shot glass',
'cocktail_id' => 41,
]);

DB::table('instructies')->insert([
'id' =>  173,
'instructie' => 'Add Strawbery and Simple Syrup to the shaker',
'cocktail_id' => 42,
]);

DB::table('instructies')->insert([
'id' =>  174,
'instructie' => 'Muddle gently',
'cocktail_id' => 42,
]);

DB::table('instructies')->insert([
'id' =>  175,
'instructie' => 'Add ice to the shaker',
'cocktail_id' => 42,
]);

DB::table('instructies')->insert([
'id' =>  176,
'instructie' => 'Pour Bourbon, Lemon Juice and Angostura Bitters into the shaker',
'cocktail_id' => 42,
]);

DB::table('instructies')->insert([
'id' =>  177,
'instructie' => 'Shake well',
'cocktail_id' => 42,
]);

DB::table('instructies')->insert([
'id' =>  178,
'instructie' => 'Strain into the collins glass',
'cocktail_id' => 42,
]);

DB::table('instructies')->insert([
'id' =>  179,
'instructie' => 'Fill up the collins glass with Ginger Beer',
'cocktail_id' => 42,
]);

DB::table('instructies')->insert([
'id' =>  180,
'instructie' => 'Garnish with Lemon wheel',
'cocktail_id' => 42,
]);

DB::table('instructies')->insert([
'id' =>  181,
'instructie' => 'Add Creme de cassis to the Champagne Glass',
'cocktail_id' => 43,
]);

DB::table('instructies')->insert([
'id' =>  182,
'instructie' => 'Fill up the glass with White Wine',
'cocktail_id' => 43,
]);

DB::table('instructies')->insert([
'id' =>  183,
'instructie' => 'Add Lemon Juicem Citruc Vodka, Triple sec and Ice cubes to the shaker',
'cocktail_id' => 44,
]);

DB::table('instructies')->insert([
'id' =>  184,
'instructie' => 'Shake well',
'cocktail_id' => 44,
]);

DB::table('instructies')->insert([
'id' =>  185,
'instructie' => 'Strain into the glass',
'cocktail_id' => 44,
]);

DB::table('instructies')->insert([
'id' =>  186,
'instructie' => 'Fill up the collins glass with crushed ice',
'cocktail_id' => 45,
]);

DB::table('instructies')->insert([
'id' =>  187,
'instructie' => 'Fill up the shaker with ice',
'cocktail_id' => 45,
]);

DB::table('instructies')->insert([
'id' =>  188,
'instructie' => 'Pour Lemon Juice, Simple Syrup and water into the shaker',
'cocktail_id' => 45,
]);

DB::table('instructies')->insert([
'id' =>  189,
'instructie' => 'Shake well',
'cocktail_id' => 45,
]);

DB::table('instructies')->insert([
'id' =>  190,
'instructie' => 'Strain into the Collins glass',
'cocktail_id' => 45,
]);

DB::table('instructies')->insert([
'id' =>  191,
'instructie' => 'Garnish with Lemon Wegde',
'cocktail_id' => 45,
]);

DB::table('instructies')->insert([
'id' =>  192,
'instructie' => 'Fill up the Collins Glass with Lime Juice, Simple Syrup and Angostura Bitters',
'cocktail_id' => 46,
]);

DB::table('instructies')->insert([
'id' =>  193,
'instructie' => 'Pour Club Soda into the Collins Glass',
'cocktail_id' => 46,
]);

DB::table('instructies')->insert([
'id' =>  194,
'instructie' => 'Garnish with Lime twist',
'cocktail_id' => 46,
]);

DB::table('instructies')->insert([
'id' =>  195,
'instructie' => 'Pour Simple Syrup, Lemon Juice, Gin, Triple sec, White Rum, Vodka and Tequila into the glass',
'cocktail_id' => 47,
]);

DB::table('instructies')->insert([
'id' =>  196,
'instructie' => 'Stir together',
'cocktail_id' => 47,
]);

DB::table('instructies')->insert([
'id' =>  197,
'instructie' => 'Fill up the glass with cola',
'cocktail_id' => 47,
]);

DB::table('instructies')->insert([
'id' =>  198,
'instructie' => 'Garnish with Lemon Wedge',
'cocktail_id' => 47,
]);

DB::table('instructies')->insert([
'id' =>  199,
'instructie' => 'Fill up the glass with ice',
'cocktail_id' => 48,
]);

DB::table('instructies')->insert([
'id' =>  200,
'instructie' => 'Fill up the shaker with ice cubes',
'cocktail_id' => 48,
]);

DB::table('instructies')->insert([
'id' =>  201,
'instructie' => 'Pour Dark Rum, White Rum, Orange Curacao, Lime Juice, Orgeat Syrup and Simple Syrup into shaker',
'cocktail_id' => 48,
]);

DB::table('instructies')->insert([
'id' =>  202,
'instructie' => 'Shake well',
'cocktail_id' => 48,
]);

DB::table('instructies')->insert([
'id' =>  203,
'instructie' => 'Strain into the Collins glass',
'cocktail_id' => 48,
]);

DB::table('instructies')->insert([
'id' =>  204,
'instructie' => 'Garnish with Lime Wheel, Mint Leaves, Pineapple wedges and Lime peel',
'cocktail_id' => 48,
]);

DB::table('instructies')->insert([
'id' =>  205,
'instructie' => 'Fill up the Mixer glass with ice cubes',
'cocktail_id' => 49,
]);

DB::table('instructies')->insert([
'id' =>  206,
'instructie' => 'Pour Angostura Bitters, Sweet Vermouth and Rye Whiskey into the mixing glass',
'cocktail_id' => 49,
]);

DB::table('instructies')->insert([
'id' =>  207,
'instructie' => 'Stir together',
'cocktail_id' => 49,
]);

DB::table('instructies')->insert([
'id' =>  208,
'instructie' => 'Strain into the Cocktail glass',
'cocktail_id' => 49,
]);

DB::table('instructies')->insert([
'id' =>  209,
'instructie' => 'Garnish with Cocktail Cherry',
'cocktail_id' => 49,
]);

DB::table('instructies')->insert([
'id' =>  210,
'instructie' => 'Garnish with Salt Rim',
'cocktail_id' => 50,
]);

DB::table('instructies')->insert([
'id' =>  211,
'instructie' => 'Pour Lime Juice, Cointreau and Tequila into the shaker',
'cocktail_id' => 50,
]);

DB::table('instructies')->insert([
'id' =>  212,
'instructie' => 'Shake well',
'cocktail_id' => 50,
]);

DB::table('instructies')->insert([
'id' =>  213,
'instructie' => 'Straint into the glass',
'cocktail_id' => 50,
]);

DB::table('instructies')->insert([
'id' =>  214,
'instructie' => 'Garnish with Lime Wedge',
'cocktail_id' => 50,
]);

DB::table('instructies')->insert([
'id' =>  215,
'instructie' => 'Pour Orange Juice into the Champagne glass',
'cocktail_id' => 51,
]);

DB::table('instructies')->insert([
'id' =>  216,
'instructie' => 'Add Champagne to the glass',
'cocktail_id' => 51,
]);

DB::table('instructies')->insert([
'id' =>  217,
'instructie' => 'Stir together',
'cocktail_id' => 51,
]);

DB::table('instructies')->insert([
'id' =>  218,
'instructie' => 'Garnish with Orange wedge',
'cocktail_id' => 51,
]);

DB::table('instructies')->insert([
'id' =>  219,
'instructie' => 'Fill up the Old Fashioned glass with ice',
'cocktail_id' => 52,
]);

DB::table('instructies')->insert([
'id' =>  220,
'instructie' => 'Pour Campari, Sweet Vermouth and Gin into the glass',
'cocktail_id' => 52,
]);

DB::table('instructies')->insert([
'id' =>  221,
'instructie' => 'Stir together',
'cocktail_id' => 52,
]);

DB::table('instructies')->insert([
'id' =>  222,
'instructie' => 'Garnish with Orange Wedge',
'cocktail_id' => 52,
]);

DB::table('instructies')->insert([
'id' =>  223,
'instructie' => 'Fill up the Old Fashioned Glass with ice',
'cocktail_id' => 53,
]);

DB::table('instructies')->insert([
'id' =>  224,
'instructie' => 'Pour Baileys Irish Cream liqueur, Frangelico into the shaker',
'cocktail_id' => 53,
]);

DB::table('instructies')->insert([
'id' =>  225,
'instructie' => 'Fill up the shaker with ice',
'cocktail_id' => 53,
]);

DB::table('instructies')->insert([
'id' =>  226,
'instructie' => 'Shake well',
'cocktail_id' => 53,
]);

DB::table('instructies')->insert([
'id' =>  227,
'instructie' => 'Strain into the Old Fashioned Glass',
'cocktail_id' => 53,
]);

DB::table('instructies')->insert([
'id' =>  228,
'instructie' => 'Add Sugar Cube to the Old Fashioned Glass',
'cocktail_id' => 54,
]);

DB::table('instructies')->insert([
'id' =>  229,
'instructie' => 'Pour Water and Angostura Bitters into the Old Fashioned glass',
'cocktail_id' => 54,
]);

DB::table('instructies')->insert([
'id' =>  230,
'instructie' => 'Crush Sugar Cube, Water and Angostura Bitters with Muddler',
'cocktail_id' => 54,
]);

DB::table('instructies')->insert([
'id' =>  231,
'instructie' => 'Fill up the Old Fashioned Glass with Ice Cubes',
'cocktail_id' => 54,
]);

DB::table('instructies')->insert([
'id' =>  232,
'instructie' => 'Pour Bourbon into the Old Fashioned Glass',
'cocktail_id' => 54,
]);

DB::table('instructies')->insert([
'id' =>  233,
'instructie' => 'Garnish with Orange Slice and Cocktail Cherry',
'cocktail_id' => 54,
]);

DB::table('instructies')->insert([
'id' =>  234,
'instructie' => 'Add Ice Cubes to the Mixing Glass',
'cocktail_id' => 55,
]);

DB::table('instructies')->insert([
'id' =>  235,
'instructie' => 'Pour Rye Whiskey, Dry Vermouth and Campari into the mixing glass',
'cocktail_id' => 55,
]);

DB::table('instructies')->insert([
'id' =>  236,
'instructie' => 'Stir together',
'cocktail_id' => 55,
]);

DB::table('instructies')->insert([
'id' =>  237,
'instructie' => 'Strain into the Cocktail glass',
'cocktail_id' => 55,
]);

DB::table('instructies')->insert([
'id' =>  238,
'instructie' => 'Garnish with Orange twist',
'cocktail_id' => 55,
]);

DB::table('instructies')->insert([
'id' =>  239,
'instructie' => 'Fill up the shaker with Crushed Ice',
'cocktail_id' => 56,
]);

DB::table('instructies')->insert([
'id' =>  240,
'instructie' => 'Pour Amaretto, Baileys Irish Cream liqueur and Kahlúa coffee liqueur into the shaker',
'cocktail_id' => 56,
]);

DB::table('instructies')->insert([
'id' =>  241,
'instructie' => 'Shake well',
'cocktail_id' => 56,
]);

DB::table('instructies')->insert([
'id' =>  242,
'instructie' => 'Strain into the shot glass',
'cocktail_id' => 56,
]);

DB::table('instructies')->insert([
'id' =>  243,
'instructie' => 'Pour White Rum, Pineapple Juice, Orange Juice and Coconut Cream into the shaker',
'cocktail_id' => 57,
]);

DB::table('instructies')->insert([
'id' =>  244,
'instructie' => 'Shake well',
'cocktail_id' => 57,
]);

DB::table('instructies')->insert([
'id' =>  245,
'instructie' => 'Strain into the Hurricane glass',
'cocktail_id' => 57,
]);

DB::table('instructies')->insert([
'id' =>  246,
'instructie' => 'Garnish with Nutmeg and Mint sprig',
'cocktail_id' => 57,
]);

DB::table('instructies')->insert([
'id' =>  247,
'instructie' => 'Add ice to the blender',
'cocktail_id' => 58,
]);

DB::table('instructies')->insert([
'id' =>  248,
'instructie' => 'Add Pineapple Juice, Coconut Cream and White Rum to the blender',
'cocktail_id' => 58,
]);

DB::table('instructies')->insert([
'id' =>  249,
'instructie' => 'Blender together',
'cocktail_id' => 58,
]);

DB::table('instructies')->insert([
'id' =>  250,
'instructie' => 'Strain into the Hurricane Glass',
'cocktail_id' => 58,
]);

DB::table('instructies')->insert([
'id' =>  251,
'instructie' => 'Garnish with Cocktail Cherry and Pineapple wedge',
'cocktail_id' => 58,
]);

DB::table('instructies')->insert([
'id' =>  252,
'instructie' => 'Add ice to the mixing glass',
'cocktail_id' => 59,
]);

DB::table('instructies')->insert([
'id' =>  253,
'instructie' => 'Pour Famouse Grouse, Dolin Blanc Vermouth and Angostura Orange Bitters into the Mixing glass',
'cocktail_id' => 59,
]);

DB::table('instructies')->insert([
'id' =>  254,
'instructie' => 'Stir together',
'cocktail_id' => 59,
]);

DB::table('instructies')->insert([
'id' =>  255,
'instructie' => 'Strain into the Cocktail glass',
'cocktail_id' => 59,
]);

DB::table('instructies')->insert([
'id' =>  256,
'instructie' => 'Garnish with Lemon twist',
'cocktail_id' => 59,
]);

DB::table('instructies')->insert([
'id' =>  257,
'instructie' => 'Fill up the shaker with ice cubes',
'cocktail_id' => 60,
]);

DB::table('instructies')->insert([
'id' =>  258,
'instructie' => 'Add Vodka, Simple Syrup, Lemon Juice and Crème de cassis tot the shaker',
'cocktail_id' => 60,
]);

DB::table('instructies')->insert([
'id' =>  259,
'instructie' => 'Shake well',
'cocktail_id' => 60,
]);


DB::table('instructies')->insert([
'id' =>  260,
'instructie' => 'Strain into the Collins glass',
'cocktail_id' => 60,
]);

DB::table('instructies')->insert([
'id' =>  261,
'instructie' => 'Fill up the glass with White wine',
'cocktail_id' => 60,
]);

DB::table('instructies')->insert([
'id' =>  262,
'instructie' => 'Garnish with Lemon Wheel',
'cocktail_id' => 60,
]);

DB::table('instructies')->insert([
'id' =>  263,
'instructie' => 'Add Orange wheel, Lemon wheel and Lime wheel to the mixing glass',
'cocktail_id' => 61,
]);

DB::table('instructies')->insert([
'id' =>  264,
'instructie' => 'Pour Lemon Juice and Simple Syrup into the mixing glass',
'cocktail_id' => 61,
]);

DB::table('instructies')->insert([
'id' =>  265,
'instructie' => 'Muddle gently',
'cocktail_id' => 61,
]);

DB::table('instructies')->insert([
'id' =>  266,
'instructie' => 'Pour Red Wine, Brandy, Orange Curacao, Grape Juice, Orange Juice and Club Soda into the mixing glass',
'cocktail_id' => 61,
]);

DB::table('instructies')->insert([
'id' =>  267,
'instructie' => 'Stir together',
'cocktail_id' => 61,
]);

DB::table('instructies')->insert([
'id' =>  268,
'instructie' => 'Add Ice Cubes to the Sour glass',
'cocktail_id' => 61,
]);

DB::table('instructies')->insert([
'id' =>  269,
'instructie' => 'Strain into the Sour glass',
'cocktail_id' => 61,
]);

DB::table('instructies')->insert([
'id' =>  270,
'instructie' => 'Garnish with Orange wheel',
'cocktail_id' => 61,
]);

DB::table('instructies')->insert([
'id' =>  271,
'instructie' => 'Fill up the Collins glass with Ice Cubes',
'cocktail_id' => 62,
]);

DB::table('instructies')->insert([
'id' =>  272,
'instructie' => 'Pour Peach Schnapps and Vodka into the glass',
'cocktail_id' => 62,
]);

DB::table('instructies')->insert([
'id' =>  273,
'instructie' => 'Fill up the glass with Cranberry Juice and Orange Juice',
'cocktail_id' => 62,
]);

DB::table('instructies')->insert([
'id' =>  274,
'instructie' => 'Add Grenadine to the glass',
'cocktail_id' => 62,
]);

DB::table('instructies')->insert([
'id' =>  275,
'instructie' => 'Garnish with Orange Wedge',
'cocktail_id' => 62,
]);

DB::table('instructies')->insert([
'id' =>  276,
'instructie' => 'Fill up the Collins glass with ice',
'cocktail_id' => 63,
]);

DB::table('instructies')->insert([
'id' =>  277,
'instructie' => 'Pour Orange Juice and Tequila into the glass',
'cocktail_id' => 63,
]);

DB::table('instructies')->insert([
'id' =>  278,
'instructie' => 'Add Grenadine drop by drop',
'cocktail_id' => 63,
]);

DB::table('instructies')->insert([
'id' =>  279,
'instructie' => 'Garnish with Cocktail Cherry and Orange Wedge',
'cocktail_id' => 63,
]);

DB::table('instructies')->insert([
'id' =>  280,
'instructie' => 'Add Ice to the mixing glass',
'cocktail_id' => 64,
]);

DB::table('instructies')->insert([
'id' =>  281,
'instructie' => 'Pour Irish Whiskey and Carpano Antica Formula Vermouth into the mixing glass',
'cocktail_id' => 64,
]);

DB::table('instructies')->insert([
'id' =>  282,
'instructie' => 'Stir together',
'cocktail_id' => 64,
]);

DB::table('instructies')->insert([
'id' =>  283,
'instructie' => 'Stain into the Cocktail glass',
'cocktail_id' => 64,
]);

DB::table('instructies')->insert([
'id' =>  284,
'instructie' => 'Add Ice to the shaker',
'cocktail_id' => 65,
]);

DB::table('instructies')->insert([
'id' =>  285,
'instructie' => 'Add Worcestershire sauce, Tomato Juice, Tequila, Salt, Orange Juice, Onion, Lime Juice, Honey Syrup and Chili Pepper to the shaker',
'cocktail_id' => 65,
]);

DB::table('instructies')->insert([
'id' =>  286,
'instructie' => 'Shake well',
'cocktail_id' => 65,
]);

DB::table('instructies')->insert([
'id' =>  287,
'instructie' => 'Strain into the Collins glass',
'cocktail_id' => 65,
]);

DB::table('instructies')->insert([
'id' =>  288,
'instructie' => 'Garnish with Lime Slice',
'cocktail_id' => 65,
]);

DB::table('instructies')->insert([
'id' =>  289,
'instructie' => 'Fill up the Shaker with Ice Cubes',
'cocktail_id' => 66,
]);

DB::table('instructies')->insert([
'id' =>  290,
'instructie' => 'Pour Gin, Vodka, Lillet Blanc into the Shaker',
'cocktail_id' => 66,
]);

DB::table('instructies')->insert([
'id' =>  291,
'instructie' => 'Shake well',
'cocktail_id' => 66,
]);

DB::table('instructies')->insert([
'id' =>  292,
'instructie' => 'Strain into the Cocktail glass',
'cocktail_id' => 66,
]);

DB::table('instructies')->insert([
'id' =>  293,
'instructie' => 'Garnish with Lemon Spiral',
'cocktail_id' => 66,
]);

DB::table('instructies')->insert([
'id' =>  294,
'instructie' => 'Fill up the shaker with Ice Cubes',
'cocktail_id' => 67,
]);

DB::table('instructies')->insert([
'id' =>  295,
'instructie' => 'Pour Bourbon, Simple Syrup, Lemon Juice, Grenadine into the shaker',
'cocktail_id' => 67,
]);

DB::table('instructies')->insert([
'id' =>  296,
'instructie' => 'Shake well',
'cocktail_id' => 67,
]);

DB::table('instructies')->insert([
'id' =>  297,
'instructie' => 'Strain into the Old Fashioned glass',
'cocktail_id' => 67,
]);

DB::table('instructies')->insert([
'id' =>  298,
'instructie' => 'Garnish with Orange Slice and Cocktail Cherry',
'cocktail_id' => 67,
]);

DB::table('instructies')->insert([
'id' =>  299,
'instructie' => 'Fill up the shaker with ice',
'cocktail_id' => 68,
]);

DB::table('instructies')->insert([
'id' =>  300,
'instructie' => 'Pour Lemon Juice, Triple Gin into the shaker',
'cocktail_id' => 68,
]);

DB::table('instructies')->insert([
'id' =>  301,
'instructie' => 'Shake well',
'cocktail_id' => 68,
]);

DB::table('instructies')->insert([
'id' =>  302,
'instructie' => 'Strain into the Cocktail glass',
'cocktail_id' => 68,
]);

DB::table('instructies')->insert([
'id' =>  303,
'instructie' => 'Garnish with Lemon slice',
'cocktail_id' => 68,
]);

DB::table('instructies')->insert([
'id' =>  304,
'instructie' => 'Add White Rum, Lime Juice, Triple sec and Galliano to the shaker',
'cocktail_id' => 69,
]);

DB::table('instructies')->insert([
'id' =>  305,
'instructie' => 'Shake well',
'cocktail_id' => 69,
]);

DB::table('instructies')->insert([
'id' =>  306,
'instructie' => 'Strain into the Cocktail glass',
'cocktail_id' => 69,
]);

DB::table('instructies')->insert([
'id' =>  307,
'instructie' => 'Garnish with Lemon Wedge',
'cocktail_id' => 69,
]);

DB::table('instructies')->insert([
'id' =>  308,
'instructie' => 'Add Ice to the Hurricane glass',
'cocktail_id' => 70,
]);

DB::table('instructies')->insert([
'id' =>  309,
'instructie' => 'Add Ice to the shaker',
'cocktail_id' => 70,
]);

DB::table('instructies')->insert([
'id' =>  310,
'instructie' => 'Pour Dark Rum, White Rum, Orange Curacao, Lemon Juice, Lime Juice, Orange Juice, Passion Fruit Syrup, Grenadine and Angostura Bitters into the shakers',
'cocktail_id' => 70,
]);

DB::table('instructies')->insert([
'id' =>  311,
'instructie' => 'Shake well',
'cocktail_id' => 70,
]);

DB::table('instructies')->insert([
'id' =>  312,
'instructie' => 'Strain into the Hurricane glass',
'cocktail_id' => 70,
]);

DB::table('instructies')->insert([
'id' =>  313,
'instructie' => 'Garnish with Orange Slice and Pineapple wedge',
'cocktail_id' => 70,
]);
    }
}
