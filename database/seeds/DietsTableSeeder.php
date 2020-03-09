<?php

use Illuminate\Database\Seeder;

class DietsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $diet = new Diet;
        $diet->name = 'Vegan';
        $diet->description = 'no animal products';
        $diet->save();
    }
}
