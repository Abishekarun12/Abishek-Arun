<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
                // RoleSeeder.php
        $role1 = Role::create(['name' => 'Admin', 'guard_name' => 'admin'])  // <-- Added 'guard_name' => 'web'
        ->givePermissionTo([
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
        ]);

    }
}
