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
        //
        $users = array (
            ['name' => 'Andres', 'email' => 'andres@localhost.com', 'password' => Hash::make('123456'),'urlImg' => 'img.jpg']
        );

        foreach($users as $user) {
                User::create($user);
        }
    }
}
