<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@obabu.com',
            'password' => bcrypt('@dmin123'),
            'type' => 0,
            'age' => '30',

        ]);

         User::create([
        'name' => 'Micheal',
        'email' => 'coordinator@gmail.com',
        'password' => bcrypt('123456'),
        'type' => 1,
        'age' => '25',

        ]);

        User::create([
            'name' => 'Joseph',
            'email' => 'teaher@gmail.com',
            'password' => bcrypt('123456'),
            'type' => 2,
            'coordinator_id' => 1,
            'age' => '27',

        ]);

        User::create([
            'name' => 'Coding',
            'email' => 'parent@gmail.com',
            'password' => bcrypt('123456'),
            'type' => 3,
            'age' => '34',

        ]);
        User::create([
            'name' => 'joy',
            'email' => 'student@gmail.com',
            'password' => bcrypt('123456'),
            'teacher_id' => 2,
            'type' => 4,
            'age' => '3',

        ]);
    }
}
