<?php

namespace Database\Seeders;

use App\Models\SpecialFeatures;
use Illuminate\Database\Seeder;

class SpecificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specifications = [
            ['id' => 1, 'label' => 'Composition', 'type' => 'composition', 'status' => '1'],
            ['id' => 2, 'label' => 'Active Incredients', 'type' => 'active_ingredients', 'status' => '1'],
            ['id' => 3, 'label' => 'Mode Of Action', 'type' => 'mode_of_action', 'status' => '1'],
            ['id' => 4, 'label' => 'Crop', 'type' => 'crop', 'status' => '1'],
            ['id' => 5, 'label' => 'Dosage & Methods of Application', 'type' => 'dosage', 'status' => '1'],
            ['id' => 6, 'label' => 'Precautions', 'type' => 'precautions', 'status' => '1'],
            ['id' => 7, 'label' => 'Time of Erection', 'type' => 'time_of_erection', 'status' => '1'],
            ['id' => 8, 'label' => 'Plant Type', 'type' => 'plant_type', 'status' => '1'],
            ['id' => 9, 'label' => 'Plant Height', 'type' => 'plant_height', 'status' => '1'],
            ['id' => 10, 'label' => 'Duration', 'type' => 'duration', 'status' => '1'],
            ['id' => 11, 'label' => 'Fruit Shape', 'type' => 'fruit_shape', 'status' => '1'],
            ['id' => 12, 'label' => 'Fruit Weight', 'type' => 'fruit_weight', 'status' => '1'],
            ['id' => 13, 'label' => 'Fruit Color', 'type' => 'fruit_color', 'status' => '1'],
            ['id' => 14, 'label' => 'Fruit Length', 'type' => 'fruit_length', 'status' => '1'],
            ['id' => 15, 'label' => 'Crud Weight', 'type' => 'crud_weight', 'status' => '1'],
            ['id' => 16, 'label' => 'Pod Length', 'type' => 'pod_length', 'status' => '1'],
            ['id' => 17, 'label' => 'Flowering', 'type' => 'flowering', 'status' => '1'],
            ['id' => 18, 'label' => 'Fruit Bearing', 'type' => 'fruit_bearing', 'status' => '1'],
            ['id' => 19, 'label' => 'Root Length', 'type' => 'root_length', 'status' => '1'],
            ['id' => 20, 'label' => 'Harvesting', 'type' => 'harvesting', 'status' => '1'],
            ['id' => 21, 'label' => 'Package Of Practices', 'type' => 'package_of_practices', 'status' => '1'],
            ['id' => 22, 'label' => 'Available Packing', 'type' => 'packing', 'status' => '1'],
            ['id' => 23, 'label' => 'Note', 'type' => 'note', 'status' => '1'],

        ];

        foreach ($specifications as $attributes) {
            SpecialFeatures::create($attributes);
        }
    }
}
