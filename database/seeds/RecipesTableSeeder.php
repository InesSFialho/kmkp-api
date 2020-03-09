<?php

use Illuminate\Database\Seeder;
use App\Recipe;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recipe = new Recipe;
        $recipe->title = 'Arroz de Cenoura';
        $recipe->save();
    }
}
