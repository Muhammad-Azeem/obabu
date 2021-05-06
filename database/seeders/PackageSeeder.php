<?php

namespace Database\Seeders;

use App\Models\PackageOption;
use Illuminate\Database\Seeder;
use App\Models\Package;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    $package = Package::create([
            'monthly_price' => '60',
            'weekly_price' => '15',
            'discount' => '10',
            'days_per_week' => '3',
            'per_day_price' => '5',
            'name' => 'Pathfinder'


        ]);

        PackageOption::updateOrCreate([
            'package_id' => $package->id,
            'number' => 2,
        ]);

        PackageOption::updateOrCreate([
            'package_id' => $package->id,
            'number' => 5,
        ]);

        PackageOption::updateOrCreate([
            'package_id' => $package->id,
            'number' => 6,
        ]);

        $package = Package::create([
            'monthly_price' => '80',
            'weekly_price' => '20',
            'discount' => '15',
            'days_per_week' => '5',
            'per_day_price' => '4',
            'name' => 'Explore',
        ]);

        PackageOption::updateOrCreate([
            'package_id' => $package->id,
            'number' => 3,
        ]);

        PackageOption::updateOrCreate([
            'package_id' => $package->id,
            'number' => 5,
        ]);

        PackageOption::updateOrCreate([
            'package_id' => $package->id,
            'number' => 4,
        ]);

        $package = Package::create([
            'monthly_price' => '100',
            'weekly_price' => '25',
            'discount' => '30',
            'days_per_week' => '5',
            'per_day_price' => '3',

            'name' => 'adventurer',
        ]);

        PackageOption::updateOrCreate([
            'package_id' => $package->id,
            'number' =>93,
        ]);

        PackageOption::updateOrCreate([
            'package_id' => $package->id,
            'number' => 1,
        ]);

        PackageOption::updateOrCreate([
            'package_id' => $package->id,
            'number' => 2,
        ]);

        $package = Package::updateOrCreate([
            'per_day_price' => '6',
            'is_session_count' => '3',
        ]);

        $package = Package::updateOrCreate([
            'per_day_price' => '3',
            'is_session_count' => '10',
        ]);

        $package = Package::updateOrCreate([
            'per_day_price' => '2',
            'is_session_count' => '15',
        ]);


    }
}
