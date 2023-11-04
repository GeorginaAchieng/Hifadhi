<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Super Admin User
        $superAdmin = User::create([
            'name' => 'Georgina Achieng', 
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456')
        ]);
        $superAdmin->assignRole('Super Admin');

        // Creating Admin User
        $admin = User::create([
            'name' => 'required', 
            'email' => 'doctors@gmail.com',
            'password' => Hash::make('doc1234')
        ]);
        $admin->assignRole('Admin');

        // Creating Appontment Manager User
        $appointmentManager = User::create([
            'name' => '', 
            'email' => '',
            'password' => Hash::make('')
        ]);
        $appointmentManager->assignRole('appointmentManager');

         // Creating Client User
         $client = User::create([
            'name' => '', 
            'email' => '',
            'password' => Hash::make('')
        ]);
        $client->assignRole('client');
    }
}