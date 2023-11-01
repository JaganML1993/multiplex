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
            ['id' => 1, 'location' => 'Bangalore', 'email' => 'bangalore@gmail.com'],
            ['id' => 2, 'location' => 'Chennai', 'email' => 'chennai@gmail.com'],
            ['id' => 3, 'location' => 'Delhi', 'email' => 'delhi@gmail.com'],
        ];

        foreach($locations as $loc){
            Location::create($loc);
        }
    }
}
