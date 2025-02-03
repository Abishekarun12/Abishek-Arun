<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear cached permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

                // List of permissions
                // PermissionSeeder.php
        $permissions = [
            'permission_show',
            'permission_create',
            'permission_edit',
            'permission_delete',
            'role_show',
            'role_create',
            'role_edit',
            'role_delete',
            'user_show',
            'user_create',
            'user_edit',
            'user_delete'
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission, 'guard_name' => 'admin']);  // <-- Changed to 'web'
        }

    }
}
