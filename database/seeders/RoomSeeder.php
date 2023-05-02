<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::create([
            'room_number' => 101,
            'facility_id' => null,
            'room_type_id' => 1,
            'room_status' => 'ready',
            'random_str' => Str::random(30)
        ]);

        Room::create([
            'room_number' => 102,
            'facility_id' => null,
            'room_type_id' => 1,
            'room_status' => 'ready',
            'random_str' => Str::random(30)
        ]);

        Room::create([
            'room_number' => 103,
            'facility_id' => null,
            'room_type_id' => 1,
            'room_status' => 'ready',
            'random_str' => Str::random(30)
        ]);

        Room::create([
            'room_number' => 104,
            'facility_id' => null,
            'room_type_id' => 2,
            'room_status' => 'ready',
            'random_str' => Str::random(30)
        ]);

        Room::create([
            'room_number' => 105,
            'facility_id' => null,
            'room_type_id' => 2,
            'room_status' => 'ready',
            'random_str' => Str::random(30)
        ]);
    }
}
