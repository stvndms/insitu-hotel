<?php

namespace Database\Seeders;

use App\Models\RoomType;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RoomType::create([
            'room_type' => 'Reguler Twin Bed',
            'description' => 'Kamar dengan dua kasur terpisah untuk dua orang',
            'random_str' => Str::random(30) 
        ]);

        RoomType::create([
            'room_type' => 'Reguler Double Bed',
            'description' => 'Kamar dengan satu kasur untuk dua orang',
            'random_str' => Str::random(30) 
        ]);
    }
}
