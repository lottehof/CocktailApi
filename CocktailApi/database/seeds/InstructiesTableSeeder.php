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
'id' =>  118,
'instructie' => 'Strain into the cocktail glass',
'cocktail_id' => 29,
]);



    }
}
