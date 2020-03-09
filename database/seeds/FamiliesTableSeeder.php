<?php

use Illuminate\Database\Seeder;
use App\Family;

class FamiliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // new Family("fruit")->save();

        $family = new Family;
        $family->name = 'fruit';
        $family->save();

        $family = new Family;
        $family->name = 'dry fruit';
        $family->save();

        $family = new Family;
        $family->name = 'cereal';
        $family->save();

        $family = new Family;
        $family->name = 'grain';
        $family->save();

        $family = new Family;
        $family->name = 'root vegetable';
        $family->save();
    }
}