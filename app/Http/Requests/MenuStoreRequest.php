<?php

namespace App\Http\Requests;

use App\Models\Menu;
use Illuminate\Support\Str;

use Illuminate\Foundation\Http\FormRequest;

class MenuStoreRequest extends FormRequest
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
            'description' => ['string'],
            'metaTitle' => ['string'],
            'metaDescription' => ['string'],
            'metaKeyphrase' => ['string'],
            'parallexImage' => ['string'],
            'featuredImage' => ['string'],
            'publishStatus' => ['required'],
            'published_at' => ['nullable'],
            'type' => ['required', 'string'],
            'externalUrl' => ['string'],
            'slug' => ['required'],
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'slug' => Str::slug(request()->type .'-'.request()->title) . '' . now()->timestamp,
            'position' => 1,
        ]);
    }
}
