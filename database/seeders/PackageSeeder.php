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
            'monthly_price' => '54',
            'weekly_price' => '3',
            'discount' => '1',
            'days_per_week' => '20',
            'per_day_price' => '2',

        ]);

        PackageOption::create([
            'package_id' => $package->id,
            'number' => 2,
        ]);

        PackageOption::create([
            'package_id' => $package->id,
            'number' => 5,
        ]);

        PackageOption::create([
            'package_id' => $package->id,
            'number' => 6,
        ]);

        $package = Package::create([
            'monthly_price' => '44',
            'weekly_price' => '32',
            'discount' => '13',
            'days_per_week' => '23',
            'per_day_price' => '23',
        ]);

        PackageOption::create([
            'package_id' => $package->id,
            'number' => 3,
        ]);

        PackageOption::create([
            'package_id' => $package->id,
            'number' => 5,
        ]);

        PackageOption::create([
            'package_id' => $package->id,
            'number' => 4,
        ]);

        $package = Package::create([
            'monthly_price' => '54',
            'weekly_price' => '24',
            'discount' => '1',
            'days_per_week' => '3',
            'per_day_price' => '75',
        ]);

        PackageOption::create([
            'package_id' => $package->id,
            'number' =>93,
        ]);

        PackageOption::create([
            'package_id' => $package->id,
            'number' => 1,
        ]);

        PackageOption::create([
            'package_id' => $package->id,
            'number' => 2,
        ]);

        $package = Package::create([
            'per_day_price' => '6',
            'is_session_count' => '3',
        ]);

        $package = Package::create([
            'per_day_price' => '3',
            'is_session_count' => '10',
        ]);

        $package = Package::create([
            'per_day_price' => '2',
            'is_session_count' => '15',
        ]);


    }
}
