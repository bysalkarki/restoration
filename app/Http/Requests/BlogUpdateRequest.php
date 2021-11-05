<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogUpdateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'view' => ['required', 'integer', 'gt:0'],
            'slug' => ['required', 'string', 'unique:blogs,slug'],
            'publishAt' => [''],
            'publishStatus' => ['required'],
            'image' => ['required', 'string'],
        ];
    }
}
