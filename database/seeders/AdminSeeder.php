<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name'     => 'Md. Ashikur Rahman',
            'email'    => 'admin@gmail.com',
            'password' => Hash::make('admin125'),
            'role'     => 'admin',
            'isActive' => 'active'
        ]);
        User::create([
            'name'     => 'Mr. Manager',
            'email'    => 'manager@gmail.com',
            'password' => Hash::make('manager123'),
            'role'     => 'manager',
            'isActive' => 'inActive'
        ]);
        User::create([
            'name'     => 'Mr. XYZ',
            'email'    => 'customer@gmail.com',
            'password' => Hash::make('customer123'),
            'role'     => 'customer',
            'isActive' => 'inActive'
        ]);
    }
}
