<?php

use Illuminate\Database\Seeder;

class BenodighedenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('benodigheden')->insert([
      'id' =>  '',
      'benodigheid' => ''
    ]);
    }
}
