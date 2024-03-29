<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GalleryUpdateRequest extends FormRequest
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
            'title' => ['string'],
            'image' => ['array'],
            'image.*' => ['required', 'string'],
            'publishStatus' => ['required'],
            'category' => ['required'],
            'category.*' => ['required', 'exists:categories,id']
        ];
    }
}
