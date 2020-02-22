<?php

use Illuminate\Database\Seeder;
use App\Pantry;

class PantriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pantry = new Pantry;
        $pantry->name = 'Junqueira';
        $pantry->save();
    }
}
