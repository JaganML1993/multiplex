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
            'back_image' => ['nullable', 'mimes:jpeg,png,jpg', 'max:2048'],
            'benefits' => ['required'],
            'status' => ['required'],
            'video_link' => ['nullable', 'string'],
            'catelog_link' => ['nullable', 'string'],
            'crop' => ['nullable'],
            'dosage' => ['nullable'],
            'packing' => ['nullable'],
            'composition' => ['nullable'],
        ];
    }
}
