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
        ];

        $folder = 'uploads/products';
        if(isset($params['front_image'])){
            $insertData['front_image'] = UploadImageAct::run($folder, $params['front_image']);
        }

        if(isset($params['back_image']) && !empty($params['back_image'])){
            $insertData['back_image'] = UploadImageAct::run($folder, $params['back_image']);
        }

      
        

        return Product::create($insertData);
    }
}
