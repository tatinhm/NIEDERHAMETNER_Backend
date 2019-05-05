<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new App\User();
        $user->firstName = 'Tatjana';
        $user->lastName = 'Niederhametner';
        $user->admin = 1;
        $user->email = 'test@gmail.com';
        $user->password = bcrypt('secret');
        $user->address = 'Kahlenbergstraße 15';
        $user->save();

        $user2 = new App\User();
        $user2->firstName = 'Petra';
        $user2->lastName = 'Nagl';
        $user2->admin = 0;
        $user2->email = 'pez09@gmail.com';
        $user2->password = bcrypt('secret');
        $user2->address = 'Kahlenbergstraße 15';
        $user2->save();


    }
}
