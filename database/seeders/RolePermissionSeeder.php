<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::create(['name' => 'Owner', 'guard_name' => 'web']);
        Role::create(['name' => 'Manager', 'guard_name' => 'web']);
        Role::create(['name' => 'Accountant', 'guard_name' => 'web']);
        Role::create(['name' => 'Employee', 'guard_name' => 'web']);
        Role::create(['name' => 'Driver', 'guard_name' => 'web']);

        // Create permissions
        Permission::create(['name' => 'create-post', 'guard_name' => 'web']);
        Permission::create(['name' => 'edit-post', 'guard_name' => 'web']);
        Permission::create(['name' => 'view-post', 'guard_name' => 'web']);
        Permission::create(['name' => 'delete-post', 'guard_name' => 'web']);

        //assign permissions to admin
        $adminRole->syncPermissions(['create-post', 'edit-post', 'view-post', 'delete-post']);
    }
}
