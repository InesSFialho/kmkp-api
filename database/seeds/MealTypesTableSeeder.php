<?php

use Illuminate\Database\Seeder;
use App\MealType;

class MealTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $meal = new MealType;
        $meal->name = 'Breakfast';
        $meal->save();

        $meal = new MealType;
        $meal->name = 'Brunch';
        $meal->save();

        $meal = new MealType;
        $meal->name = 'Lunch';
        $meal->save();

        $meal = new MealType;
        $meal->name = 'Tea';
        $meal->save();

        $meal = new MealType;
        $meal->name = 'Snack';
        $meal->save();

        $meal = new MealType;
        $meal->name = 'Dinner';
        $meal->save();
    }
}
