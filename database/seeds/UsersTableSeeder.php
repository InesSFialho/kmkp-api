<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Espinha';
        $user->email = 'espinfhdsgfdswa@mail.com';
        $user->password = bcrypt('password');
        $user->save();

        $user->pantries()->attach(1);
    }
}
