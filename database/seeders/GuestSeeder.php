<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Guest;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Bruce Wayne',
            'email' => 'brucewayne@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'guest',
            'random_str' => Str::random(30)
        ]);

        Guest::create([
            'user_id' => 5,
            'has_account' => true,
            'guest_name' => 'Bruce Wayne',
            'guest_photo' => null,
            'guest_phone' => '0896',
            'guest_country' => 'Indonesia',
            'guest_address' => 'Indonesia',
            'guest_id_card' => null,
            'random_str' => Str::random(30)
        ]);

        User::create([
            'name' => 'Clark Kent',
            'email' => 'clarkkent@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'guest',
            'random_str' => Str::random(30)
        ]);

        Guest::create([
            'user_id' => 6,
            'has_account' => true,
            'guest_name' => 'Clark Kent',
            'guest_photo' => null,
            'guest_phone' => '0875',
            'guest_country' => 'Indonesia',
            'guest_address' => 'Metropolis',
            'guest_id_card' => null,
            'random_str' => Str::random(30)
        ]);

        User::create([
            'name' => 'Tony Stark',
            'email' => 'tonystark@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'guest',
            'random_str' => Str::random(30)
        ]);

        Guest::create([
            'user_id' => 7,
            'has_account' => true,
            'guest_name' => 'Tony Stark',
            'guest_photo' => null,
            'guest_phone' => '0888',
            'guest_country' => 'Indonesia',
            'guest_address' => 'Budapest',
            'guest_id_card' => null,
            'random_str' => Str::random(30)
        ]);

        User::create([
            'name' => 'Steve Rogers',
            'email' => 'rogerssir@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'guest',
            'random_str' => Str::random(30)
        ]);

        Guest::create([
            'user_id' => 8,
            'has_account' => true,
            'guest_name' => 'Steve Rogers',
            'guest_photo' => null,
            'guest_phone' => '0811',
            'guest_country' => 'Indonesia',
            'guest_address' => 'Queens',
            'guest_id_card' => null,
            'random_str' => Str::random(30)
        ]);

        User::create([
            'name' => 'Barry Allen',
            'email' => 'iamfast@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'guest',
            'random_str' => Str::random(30)
        ]);

        Guest::create([
            'user_id' => 9,
            'has_account' => true,
            'guest_name' => 'Barry Allen',
            'guest_photo' => null,
            'guest_phone' => '0873',
            'guest_country' => 'Indonesia',
            'guest_address' => 'Central City',
            'guest_id_card' => null,
            'random_str' => Str::random(30)
        ]);
    }
}
