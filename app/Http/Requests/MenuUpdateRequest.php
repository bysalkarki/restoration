<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuUpdateRequest extends FormRequest
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
            'position' => ['integer', 'gt:0'],
            'metaTitle' => ['string'],
            'description' => ['string'],
            'metaDescription' => ['string'],
            'metaKeyphrase' => ['string'],
            'parallexImage' => ['string'],
            'featuredImage' => ['string'],
            'publishStatus' => ['required'],
            'published_at' => [''],
            'type' => ['required', 'string'],
            'externalUrl' => ['string'],
        ];
    }
}
