<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::where('name','Admin')->first('id');

        $user = User::create([
            'name' => 'Pravin Chaudhary',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678')
        ]);

        $user->assignRole($role->id ?? 0);
    }
}
