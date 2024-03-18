<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin@123'),
            'roles_id' => 1,
            'branches_id' => 1
        ]);

        $this->call(RolePermissionSeeder::class);
        $this->call(BranchSeeder::class);
        $this->call(VehicleTypeSeeder::class);
        $this->call(PaymentTypeSeeder::class);
    }
}
