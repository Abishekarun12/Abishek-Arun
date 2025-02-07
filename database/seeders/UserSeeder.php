<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
               // Article permissions
        Permission::create(['name' => 'article_show','guard_name' => 'web']);
        Permission::create(['name' => 'article_create','guard_name' => 'web']);
        Permission::create(['name' => 'article_edit','guard_name' => 'web']);
        Permission::create(['name' => 'article_delete','guard_name' => 'web']);

        $role2 = Role::create(['name' => 'User','guard_name' => 'web'])
        ->givePermissionTo(['article_show','article_create','article_edit','article_delete']);

        $user = \App\Models\User::factory()->create([
            'name' => 'User',
            'email' => 'user@cri.com',
            'password' => bcrypt('Pass@123')
        ]);
        $user->assignRole($role2);
    }
}
