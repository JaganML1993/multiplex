<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateOpeningReq extends FormRequest
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
            'location' => ['required'],
            'department' => ['required'],
            'position' => ['required', 'string', 'unique:openings,position'],
            'vacancies' => ['required', 'integer'],
            'description' => ['required', 'string'],
            'roles' => ['required', 'string'],
            'qualification' => ['required', 'string'],
        ];
    }
}
