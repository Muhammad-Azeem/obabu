<?php

namespace Database\Seeders;

use Facade\Ignition\Support\Packagist\Package;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PackageSeeder::class,
        ]);
    }
}
