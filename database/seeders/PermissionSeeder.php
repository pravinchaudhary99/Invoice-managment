<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'role-list',
            'role-create',
            'role-edit',
            'invoice-list',
            'invoice-create',
            'invoice-edit',
            'invoice-delete',
            'role-delete',
            'product-list',
            'product-create',
            'product-edit',
            'product-delete'
         ];


        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
         }
    }
}
