<?php

namespace Database\Seeders;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Database\Seeders\RoomTypeSeeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory()->create();

        User::create([
            'name' => 'Ridho',
            'email' => 'ridho@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'random_str' => Str::random(30)
        ]);

        User::create([
            'name' => 'Fadhill',
            'email' => 'fadhiil@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'receptionist',
            'random_str' => Str::random(30)
        ]);

        User::create([
            'name' => 'Steven',
            'email' => 'steven@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'superAdmin',
            'random_str' => Str::random(30)
        ]);

        User::create([
            'name' => 'Nova',
            'email' => 'nova@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'guest',
            'random_str' => Str::random(30)
        ]);

        $this->call([
            RoomTypeSeeder::class,
            CountrySeeder::class,
            FacilitySeeder::class,
            RoomSeeder::class,
            GuestSeeder::class,
        ]);
    }
}
