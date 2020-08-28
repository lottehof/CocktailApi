<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(CocktailTableSeeder::class);
        $this->call(BenodighedenTableSeeder::class);
        $this->call(IngredientenTableSeeder::class);
        $this->call(InstructiesTableSeeder::class);
    }
}
