<?php

use Illuminate\Database\Seeder;
use App\Direction;

class DirectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $direction = new Direction;
        $direction->point = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.";
        $direction->recipe_id = 1;
        $direction->save();

        $direction = new Direction;
        $direction->point = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.";
        $direction->recipe_id = 1;
        $direction->save();

        $direction = new Direction;
        $direction->point = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.";
        $direction->recipe_id = 1;
        $direction->save();

    }
}
