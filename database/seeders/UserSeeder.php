<?php

namespace Database\Seeders;

use App\User;
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
        'name' => 'Faizan',
        'email' => 'faizan@gmail.com',
        'password' => bcrypt('123456'),
        'type' => 'parent',
        'age' => '25',

        ]);

        User::create([
            'name' => 'azeem',
            'email' => 'azeem@gmail.com',
            'password' => bcrypt('123456'),
            'type' => 'children',
            'age' => '27',

        ]);

        User::create([
            'name' => 'Umer',
            'email' => 'umer@gmail.com',
            'password' => bcrypt('123456'),
            'type' => 'teacher',
            'age' => '26',

        ]);
    }
}
