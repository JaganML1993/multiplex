<?php

namespace App\Actions;

use App\Models\Product;
use Lorisleiva\Actions\Concerns\AsAction;
use Illuminate\Support\Str;

class CreateProductAct
{
    use AsAction;

    public function handle($params = array())
    {
        $insertData = [
            'name' => $params['name'],
            'slug' => Str::slug($params['name']),
            'benefits' => $params['benefits'],
            'video_link' => $params['video_link'] ?? null,
            'catelog_link' => $params['catelog_link'] ?? null,
            'status' => $params['status'],
            'category_id' => $params['category'] ?? null,
            'sub_category_id' => $params['subcategory'] ?? null,
            'crop' => $params['crop'] ?? null,
            'dosage' => $params['dosage'] ?? null,
            'packing' => $params['packing'] ?? null,
            'composition' => $params['composition'] ?? null,
            'active_ingredients' => $params['active_ingredients'] ?? null,
            'mode_of_action' => $params['mode_of_action'] ?? null,
            'precautions' => $params['precautions'] ?? null,
            'special_features' => $params['special_features'] ?? null,
            'time_of_erection' => $params['time_of_erection'] ?? null,
            'note' => $params['note'] ?? null,
            'plant_type' => $params['plant_type'] ?? null,
            'plant_height' => $params['plant_height'] ?? null,
            'duration' => $params['duration'] ?? null,
            'fruit_shape' => $params['fruit_shape'] ?? null,
            'fruit_weight' => $params['fruit_weight'] ?? null,
            'crud_weight' => $params['crud_weight'] ?? null,
            'fruit_color' => $params['fruit_color'] ?? null,
            'fruit_length' => $params['fruit_length'] ?? null,
            'pod_length' => $params['pod_length'] ?? null,
            'flowering' => $params['flowering'] ?? null,
            'fruit_bearing' => $params['fruit_bearing'] ?? null,
            'root_length' => $params['root_length'] ?? null,
            'harvesting' => $params['harvesting'] ?? null,
            'package_of_practices' => $params['package_of_practices'] ?? null,
            'type_of_deficiency' => $params['type_of_deficiency'] ?? null,
            'role_of_deficiency' => $params['role_of_deficiency'] ?? null,
            'role_description' => $params['role_description'] ?? null,
            'deficiency' => $params['deficiency'] ?? null,
            'deficiency_description' => $params['deficiency_description'] ?? null,
            
            

        ];

        $folder = 'uploads/products';
        if(isset($params['front_image'])){
            $insertData['front_image'] = UploadImageAct::run($folder, $params['front_image']);
        }

        if(isset($params['image'])){
            $insertData['image'] = UploadImageAct::run($folder, $params['image']);
        }

        if(isset($params['back_image']) && !empty($params['back_image'])){
            $insertData['back_image'] = UploadImageAct::run($folder, $params['back_image']);
        }

        if(isset($params['image1']) && !empty($params['image1'])){
            $insertData['image1'] = UploadImageAct::run($folder, $params['image1']);
        }
        
        if(isset($params['image2']) && !empty($params['image2'])){
            $insertData['image2'] = UploadImageAct::run($folder, $params['image2']);
        }
        
      
        return Product::create($insertData);
    }
}
