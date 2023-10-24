<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductReq extends FormRequest
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
            'name' => ['filled', 'min:3', 'max:50'],
            'front_image' => ['filled', 'mimes:jpeg,png,jpg', 'max:2048'],
            'back_image' => ['filled', 'mimes:jpeg,png,jpg', 'max:2048'],
            'benefits' => ['filled'],
            'status' => ['filled'],
            'video_link' => ['filled', 'string'],
            'catelog_link' => ['filled', 'string'],
            'crop' => ['filled'],
            'dosage' => ['filled'],
            'packing' => ['filled'],
            'composition' => ['filled'],
        ];
    }
}
