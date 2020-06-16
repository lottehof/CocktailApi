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
      'id' =>  1,
      'benodigheid' => 'Barspoon',
      'cocktail_id' => 1,
    ]);

      DB::table('benodigheden')->insert([
      'id' =>  2,
      'benodigheid' => 'Shot Glass',
      'cocktail_id' => 1,
    ]);


    }
}
