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
            'benefits' => ['nullable'],
            'category_id' => ['filled'],
            //'sub_category_id' => ['filled'],
            'status' => ['filled'],
            'video_link' => ['nullable', 'string'],
            'catelog_link' => ['nullable', 'file', 'mimes:pdf', 'max:10240'], // max:10240 is the file size limit in kilobytes (10 MB)
            'crop' => ['nullable'],
            'dosage' => ['nullable'],
            'packing' => ['nullable'],
            //'composition' => ['filled'],
        ];
    }
}
