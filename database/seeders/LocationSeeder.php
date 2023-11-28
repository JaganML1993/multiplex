<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = [
            ['id' => 1, 'location' => 'Karnataka', 'email' => 'test'],
            ['id' => 2, 'location' => 'Maharashtra', 'email' => 'test'],
            ['id' => 3, 'location' => 'Haryana', 'email' => 'test'],
            ['id' => 4, 'location' => 'Jharkhand', 'email' => 'test'],
            ['id' => 5, 'location' => 'Gujarat', 'email' => 'test'],
            ['id' => 6, 'location' => 'Bihar', 'email' => 'test'],
            ['id' => 7, 'location' => 'Tamil Nadu', 'email' => 'test'],
            ['id' => 8, 'location' => 'Telangana', 'email' => 'test'],
            ['id' => 9, 'location' => 'Uttar Pradesh', 'email' => 'test'],
            ['id' => 10, 'location' => 'Punjab', 'email' => 'test'],
            ['id' => 11, 'location' => 'Himachal Pradesh', 'email' => 'test'],
            ['id' => 12, 'location' => 'Andhra Pradesh', 'email' => 'test'],
            ['id' => 13, 'location' => 'Assam', 'email' => 'test'],
            ['id' => 14, 'location' => 'Chhattisgarh', 'email' => 'test'],
            ['id' => 15, 'location' => 'Goa', 'email' => 'test'],
            ['id' => 16, 'location' => 'Madhya Pradesh', 'email' => 'test'],
            ['id' => 17, 'location' => 'Odisha', 'email' => 'test'],
            ['id' => 18, 'location' => 'Rajasthan', 'email' => 'test'],
            ['id' => 19, 'location' => 'Uttarakhand', 'email' => 'test'],
            ['id' => 20, 'location' => 'West Bengal', 'email' => 'test'],
        ];

        foreach($locations as $loc){
            Location::create($loc);
        }
    }
}
