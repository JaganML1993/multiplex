<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateOpeningReq extends FormRequest
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
        $id = $this->id;
        
        return [
            'location' => ['filled'],
            'department' => ['required'],
            'position' => ['filled', 'string', 'unique:openings,position,' . $id . ',id'],
            'vacancies' => ['filled', 'integer'],
            'description' => ['filled', 'string'],
            'roles' => ['filled', 'string'],
            'qualification' => ['filled', 'string'],
        ];
    }
}
