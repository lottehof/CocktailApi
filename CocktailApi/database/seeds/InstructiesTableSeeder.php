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

      DB::table('instructies')->insert([
      'id' =>  4,
      'instructie' => 'Fill up Shaker with Ice Cubes',
      'cocktail_id' => 2,
    ]);

      DB::table('instructies')->insert([
      'id' =>  5,
      'instructie' => 'Pour Grenadine, Lime Juice, White Rum into the Shaker',
      'cocktail_id' => 2,
    ]);

      DB::table('instructies')->insert([
      'id' =>  6,
      'instructie' => 'Shake Well',
      'cocktail_id' => 2,
    ]);

      DB::table('instructies')->insert([
      'id' =>  7,
      'instructie' => 'Strain into the Cocktail Glass',
      'cocktail_id' => 2,
    ]);

      DB::table('instructies')->insert([
      'id' =>  8,
      'instructie' => 'Fill up Glass with Ice Cubes',
      'cocktail_id' => 3,
    ]);

      DB::table('instructies')->insert([
      'id' =>  9,
      'instructie' => 'Add Tequila Reposado, Pineapple Juice, Cranberry Juice to the Glass',
      'cocktail_id' => 3,
    ]);

      DB::table('instructies')->insert([
      'id' =>  10,
      'instructie' => 'Garnish with Lime Wedge',
      'cocktail_id' => 3,
    ]);

      DB::table('instructies')->insert([
      'id' =>  11,
      'instructie' => 'Add Ice to the Shaker',
      'cocktail_id' => 4,
    ]);

      DB::table('instructies')->insert([
      'id' =>  12,
      'instructie' => 'Pour Banana Liquer, White Crème de Cacao, Heavy cream into the Shaker',
      'cocktail_id' => 4,
    ]);

      DB::table('instructies')->insert([
      'id' =>  13,
      'instructie' => 'Shake well',
      'cocktail_id' => 4,
    ]);

      DB::table('instructies')->insert([
      'id' =>  14,
      'instructie' => 'Strain into the Cocktail Glass',
      'cocktail_id' => 4,
    ]);

      DB::table('instructies')->insert([
      'id' =>  15,
      'instructie' => 'Pour Pineapple Juice, Lime Juice, Gold Rum, Galliano into the Collins Glass',
      'cocktail_id' => 5,
    ]);

      DB::table('instructies')->insert([
      'id' =>  16,
      'instructie' => 'Stir together',
      'cocktail_id' => 5,
    ]);

      DB::table('instructies')->insert([
      'id' =>  17,
      'instructie' => 'Fill up Glass with Prosecco',
      'cocktail_id' => 5,
    ]);

      DB::table('instructies')->insert([
      'id' =>  18,
      'instructie' => 'Garnish with Cocktail Cherry',
      'cocktail_id' => 5,
    ]);

      DB::table('instructies')->insert([
      'id' =>  19,
      'instructie' => 'Fill up Old Fashioned Glass with Ice',
      'cocktail_id' => 6,
    ]);

      DB::table('instructies')->insert([
      'id' =>  20,
      'instructie' => 'Pour Cranberry Juice, Vodka into the Glass',
      'cocktail_id' => 6,
    ]);

      DB::table('instructies')->insert([
      'id' =>  21,
      'instructie' => 'Stir together',
      'cocktail_id' => 6,
    ]);

      DB::table('instructies')->insert([
      'id' =>  22,
      'instructie' => 'Add Ice Cubes to the Shaker',
      'cocktail_id' => 7,
    ]);

      DB::table('instructies')->insert([
      'id' =>  23,
      'instructie' => 'Add Orange Bitters, Lemon Juice, Gin, Maraschino Liquer to the Shaker',
      'cocktail_id' => 7,
    ]);

      DB::table('instructies')->insert([
      'id' =>  24,
      'instructie' => 'Shake Well',
      'cocktail_id' => 7,
    ]);

      DB::table('instructies')->insert([
      'id' =>  25,
      'instructie' => 'Strain into the Cocktail Glass',
      'cocktail_id' => 7,
    ]);

      DB::table('instructies')->insert([
      'id' =>  26,
      'instructie' => 'Garnish with Lemon Spiral, Cocktail Cherry',
      'cocktail_id' => 7,
    ]);

      DB::table('instructies')->insert([
      'id' =>  27,
      'instructie' => 'Add Orange Wedge, Lemon Wedge, Pineapple Wedge to the Mixing Glass',
      'cocktail_id' => 8,
    ]);

      DB::table('instructies')->insert([
      'id' =>  28,
      'instructie' => 'Pour Luxardo Maraschino Liquer into the Mixing Glass',
      'cocktail_id' => 8,
    ]);

      DB::table('instructies')->insert([
      'id' =>  29,
      'instructie' => 'Muddle gently',
      'cocktail_id' => 8,
    ]);

      DB::table('instructies')->insert([
      'id' =>  30,
      'instructie' => 'Pour Ice, Champagne into the Mixing Glass',
      'cocktail_id' => 8,
    ]);

      DB::table('instructies')->insert([
      'id' =>  31,
      'instructie' => 'Stir together',
      'cocktail_id' => 8,
    ]);

      DB::table('instructies')->insert([
      'id' =>  32,
      'instructie' => 'Strain into the Champagne Glass',
      'cocktail_id' => 8,
    ]);

      DB::table('instructies')->insert([
      'id' =>  33,
      'instructie' => 'Garnish with Orange Peel',
      'cocktail_id' => 8,
    ]);

      DB::table('instructies')->insert([
      'id' =>  34,
      'instructie' => 'Fill up Shaker with Ice Cubes',
      'cocktail_id' => 9,
    ]);

      DB::table('instructies')->insert([
      'id' =>  35,
      'instructie' => 'Add Raspberry Syrup, Lemon Juice, Gin, Egg White to the Shaker',
      'cocktail_id' => 9,
    ]);

      DB::table('instructies')->insert([
      'id' =>  36,
      'instructie' => 'Shake well',
      'cocktail_id' => 9,
    ]);

      DB::table('instructies')->insert([
      'id' =>  37,
      'instructie' => 'Strain into the Cocktail Glass',
      'cocktail_id' => 9,
    ]);

      DB::table('instructies')->insert([
      'id' =>  38,
      'instructie' => 'Fill up Shaker with Ice',
      'cocktail_id' => 10,
    ]);

      DB::table('instructies')->insert([
      'id' =>  39,
      'instructie' => 'Pour Lime Juice, Simple Syrup, White Rum into the Shaker',
      'cocktail_id' => 10,
    ]);

      DB::table('instructies')->insert([
      'id' =>  40,
      'instructie' => 'Shake well',
      'cocktail_id' => 10,
    ]);

      DB::table('instructies')->insert([
      'id' =>  41,
      'instructie' => 'Strain into the Cocktail Glass',
      'cocktail_id' => 10,
    ]);

      DB::table('instructies')->insert([
      'id' =>  42,
      'instructie' => 'Garnish with Lime Slice',
      'cocktail_id' => 10,
    ]);

      DB::table('instructies')->insert([
      'id' =>  43,
      'instructie' => 'Fill up Collins Glass with Ice Cubes',
      'cocktail_id' => 11,
    ]);

      DB::table('instructies')->insert([
      'id' =>  44,
      'instructie' => 'Pour Dark Rum into the Collins Glass',
      'cocktail_id' => 11,
    ]);

      DB::table('instructies')->insert([
      'id' =>  45,
      'instructie' => 'Pour Ginger Beer into the Collins Glass',
      'cocktail_id' => 11,
    ]);

      DB::table('instructies')->insert([
      'id' =>  46,
      'instructie' => 'Garnish with Lime Wedge',
      'cocktail_id' => 11,
    ]);

      DB::table('instructies')->insert([
      'id' =>  47,
      'instructie' => 'Fill up Mixing Glass with Ice',
      'cocktail_id' => 12,
    ]);

      DB::table('instructies')->insert([
      'id' =>  48,
      'instructie' => 'Pour, Rye Whiskey, Dolin Blanc Vermouth, Benedictine D.O.M., Absinthe, Peychauds Bitters into the Mixing Glass',
      'cocktail_id' => 12,
    ]);

      DB::table('instructies')->insert([
      'id' =>  49,
      'instructie' => 'Stir together',
      'cocktail_id' => 12,
    ]);

      DB::table('instructies')->insert([
      'id' =>  50,
      'instructie' => 'Strain into the Cocktail Glass',
      'cocktail_id' => 12,
    ]);

      DB::table('instructies')->insert([
      'id' =>  51,
      'instructie' => 'Garnish with Cocktail Cherry',
      'cocktail_id' => 12,
    ]);

      DB::table('instructies')->insert([
      'id' =>  52,
      'instructie' => 'Add Ice Cubes to the Mixer Glass',
      'cocktail_id' => 13,
    ]);

      DB::table('instructies')->insert([
      'id' =>  53,
      'instructie' => 'Pour Orange Bitters, Gin into the Mixer Glass',
      'cocktail_id' => 13,
    ]);

      DB::table('instructies')->insert([
      'id' =>  54,
      'instructie' => 'Stir together',
      'cocktail_id' => 13,
    ]);

      DB::table('instructies')->insert([
      'id' =>  55,
      'instructie' => 'Strain into the Cocktail',
      'cocktail_id' => 13,
    ]);

      DB::table('instructies')->insert([
      'id' =>  56,
      'instructie' => 'Garnish with Mint Leaves',
      'cocktail_id' => 13,
    ]);

      DB::table('instructies')->insert([
      'id' =>  57,
      'instructie' => 'Pour White Rum, Dry Vermouth, Pierre Ferrand Dry Curacao, Grenadine into the Shaker',
      'cocktail_id' => 14,
    ]);

      DB::table('instructies')->insert([
      'id' =>  58,
      'instructie' => 'Fill the Shaker with Ice',
      'cocktail_id' => 14,
    ]);

      DB::table('instructies')->insert([
      'id' =>  59,
      'instructie' => 'Shake well',
      'cocktail_id' => 14,
    ]);

      DB::table('instructies')->insert([
      'id' =>  60,
      'instructie' => 'Strain into the Glass',
      'cocktail_id' => 14,
    ]);





    }
}
