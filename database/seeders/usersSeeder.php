<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
               'name'=>'Shaikh Nadeem', //admin
               'email'=>'nadeem.shaikh@wdipl.com',
                'is_admin'=>'1',
               'password'=> bcrypt('wdipl@123'),
            ],
            [
               'name'=>'Bablu Maurya', //User
               'email'=>'bablu@wdipl.com',
                'is_admin'=>'0',
               'password'=> bcrypt('wdipl@123'),
            ],
        ];
  
        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
