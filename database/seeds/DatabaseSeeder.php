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
        $this->call(PantriesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(FamiliesTableSeeder::class);
        $this->call(IngredientsTableSeeder::class);
        $this->call(RecipesTableSeeder::class);
        $this->call(DirectionsTableSeeder::class);
        $this->call(DietsTableSeeder::class);
        $this->call(MealTypesTableSeeder::class);
        $this->call(MealsTableSeeder::class);
        $this->call(SidedishTypesTableSeeder::class);
        $this->call(SidedishesTableSeeder::class);
    }
}
