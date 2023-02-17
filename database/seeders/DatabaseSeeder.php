<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create();
        
        User::create([
            'name' => 'Ridho',
            'email' => 'ridho@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Fadhill',
            'email' => 'fadhiil@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'receptionist',
        ]);

        User::create([
            'name' => 'Steven',
            'email' => 'steven@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'superAdmin',
        ]);
        User::create([
            'name' => 'Nova',
            'email' => 'nova@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'guest',
        ]);
    }
}
