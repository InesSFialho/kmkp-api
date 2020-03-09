<?php

use Illuminate\Database\Seeder;
use App\Ingredient;

class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ingredient = new Ingredient;
        $ingredient->name = 'rice';
        $ingredient->emoji = '🍚';
        $ingredient->family_id = 3;
        $ingredient->save();

        $ingredient = new Ingredient;
        $ingredient->name = 'carrot';
        $ingredient->emoji = '🥕';
        $ingredient->family_id = 5;
        $ingredient->save();
    }
}
