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
      'id' =>  '',
      'instructie' => ''
    ]);
    }
}
