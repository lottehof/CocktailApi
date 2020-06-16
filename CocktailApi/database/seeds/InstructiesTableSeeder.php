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
    }
}
