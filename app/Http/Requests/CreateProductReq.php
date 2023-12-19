<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductReq extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'min:3', 'max:50', 'unique:products,name'],
            'front_image' => ['required', 'mimes:jpeg,png,jpg', 'max:2048'],
            'image' => ['required', 'mimes:jpeg,png,jpg', 'max:2048'],
            'back_image' => ['nullable', 'mimes:jpeg,png,jpg', 'max:2048'],
            'benefits' => ['nullable'],
            'category' => ['required'],
            'subcategory' => ['nullable'],
            'status' => ['required'],
            'video_link' => ['nullable', 'string'],
            'catelog_link' => ['nullable', 'file', 'mimes:pdf', 'max:10240'], // max:10240 is the file size limit in kilobytes (10 MB)
            'crop' => ['nullable'],
            'dosage' => ['nullable'],
            'packing' => ['nullable'],
            'composition' => ['nullable'],
            'active_ingredients' => ['nullable', 'string'],
            'mode_of_action' => ['nullable', 'string'],
            'precautions' => ['nullable', 'string'],
            'special_features' => ['nullable', 'string'],
            'time_of_erection' => ['nullable', 'string'],
            'note' => ['nullable', 'string'],
            'plant_type' => ['nullable', 'string'],
            'plant_height' => ['nullable', 'string'],
            'duration' => ['nullable', 'string'],
            'fruit_shape' => ['nullable', 'string'],
            'fruit_weight' => ['nullable', 'string'],
            'crud_weight' => ['nullable', 'string'],
            'fruit_color' => ['nullable', 'string'],
            'fruit_length' => ['nullable', 'string'],
            'pod_length' => ['nullable', 'string'],
            'flowering' => ['nullable', 'string'],
            'fruit_bearing' => ['nullable', 'string'],
            'root_length' => ['nullable', 'string'],
            'harvesting' => ['nullable', 'string'],
            'package_of_practices' => ['nullable', 'string'],
        ];
    }
}
