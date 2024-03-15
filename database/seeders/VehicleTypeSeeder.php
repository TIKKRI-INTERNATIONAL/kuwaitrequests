<?php

namespace Database\Seeders;

use App\Models\VehicleType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VehicleType::create(['name' => 'Car']);
        VehicleType::create(['name' => 'Bike']);
        VehicleType::create(['name' => 'Van']);
    }
}
