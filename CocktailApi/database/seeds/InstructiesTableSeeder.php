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
      'instructie' => 'Pour Grenadine into the Shot Glass
                       Gently layer the Vodka
                       Gently layer the Blue Curacao'
    ]);

    }
}
