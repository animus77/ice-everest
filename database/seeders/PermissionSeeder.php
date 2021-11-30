<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use App\Models\User;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'sells']);
        Permission::create(['name' => 'promotions']);
        Permission::create(['name' => 'equipments']);
        Permission::create(['name' => 'products']);
        Permission::create(['name' => 'contact']);
        Permission::create(['name' => 'users']);

        Permission::create(['name' => 'purchase']);
        Permission::create(['name' => 'profile']);

        Permission::create(['name' => 'see_links']);

        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'client']);

        $role1->givePermissionTo([
            'users',
            'sells',
            'promotions',
            'equipments',
            'products',
            'purchase',
            'profile',
            'see_links',
            'contact'
        ]);

        $role2->givePermissionTo([
            'purchase',
            'profile',
            'see_links'
        ]);

        $user = User::find(1);
        $user->assignRole($role1);
        
    }
}
