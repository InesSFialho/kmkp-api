<?php

use Illuminate\Database\Seeder;

class MealsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $meal = new Meal;
        $meal->type_id = 3;
        $meal->save();

        $meal->recipes()->attach(1, ['sidedish' => 1]);
    }
}
