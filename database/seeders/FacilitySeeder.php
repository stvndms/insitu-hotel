<?php

namespace Database\Seeders;

use App\Models\Facility;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Facility::create([
            'facility_name' => 'PC Gaming',
            'facility_type' => 'room',
            'facility_price' => 100,
            'facility_image' => null,
            'random_str' => Str::random(30)
        ]);

        Facility::create([
            'facility_name' => 'PS5',
            'facility_type' => 'room',
            'facility_price' => 100,
            'facility_image' => null,
            'random_str' => Str::random(30)
        ]);

        Facility::create([
            'facility_name' => 'XBOX Series X',
            'facility_type' => 'room',
            'facility_price' => 100,
            'facility_image' => null,
            'random_str' => Str::random(30)
        ]);

        Facility::create([
            'facility_name' => 'Conference Room A',
            'facility_type' => 'hotel',
            'facility_price' => 1000,
            'facility_image' => null,
            'random_str' => Str::random(30)
        ]);

        Facility::create([
            'facility_name' => 'Conference Room B',
            'facility_type' => 'hotel',
            'facility_price' => 1000,
            'facility_image' => null,
            'random_str' => Str::random(30)
        ]);

        Facility::create([
            'facility_name' => 'Balai Krida Mewah',
            'facility_type' => 'hotel',
            'facility_price' => 2000,
            'facility_image' => null,
            'random_str' => Str::random(30)
        ]);
    }
}
