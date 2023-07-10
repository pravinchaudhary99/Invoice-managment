<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = ['Admin','User','Client'];

        foreach ($roles as $role) {
            Role::create(['name' => $role,'guard_name' => 'web']);
        }

        $permissionIDs = Permission::get('id')->toArray();

        $role = Role::where('name','Admin')->first();
        $role->syncPermissions($permissionIDs);

    }
}
