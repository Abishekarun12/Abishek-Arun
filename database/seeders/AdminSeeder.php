<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Create the role with 'admin' guard
        $role = Role::create([
            'name' => 'Branch',
            'guard_name' => 'admin'   // <-- Correct guard
        ])->givePermissionTo([
            'role_show',
            'role_create',
            'role_edit',
            'role_delete',
            'permission_show',
            'permission_create',
            'permission_edit',
            'permission_delete',
            'user_show',
            'user_create',
            'user_edit',
            'user_delete'
        ]);

        // Create the admin user
        $user = \App\Models\Admin\Admin::create([
            'name' => 'Admin',
            'email' => 'abiarun7708@gmail.com',
            'password' => bcrypt('Pass@123')
        ]);

        // Assign the role to the admin user
        $user->assignRole($role);  // Now the guards match
    }
}
