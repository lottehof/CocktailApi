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
      'id' =>  '1',
      'instructie' => 'Pour Grenadine into the Shot Glass'
    ]);

      DB::table('instructies')->insert([
      'id' =>  '1',
      'instructie' => 'Gently layer the Vodka'
    ]);

      DB::table('instructies')->insert([
      'id' =>  '1',
      'instructie' => 'Gently layer the Blue Curacao'
    ]);
    }
}
