<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class BlogStoreRequest extends FormRequest
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
            'publishAt' => ['required'],
            'publishStatus' => ['required'],
            'image' => ['required', 'string'],
            'category' => ['required', 'array'],
            'category.*' => ['required', 'exists:categories,id']
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'slug' => Str::slug(request()->title) . '' . now()->timestamp,
            'view' => 1,
        ]);
    }
}
