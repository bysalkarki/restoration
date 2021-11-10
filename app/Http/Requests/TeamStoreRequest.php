<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamStoreRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'position' => ['integer', 'gt:0'],
            'publishStatus' => ['required', 'boolean'],
            'email' => ['email'],
            'image'=>['nullable'],
            'facebook' => ['string', 'nullable'],
            'contact' => ['string', 'nullable'],
            'twitter' => ['string', 'nullable'],
            'instagram' => ['string', 'nullable'],
            'designation' => ['string', 'nullable'],
            'description' => ['string', 'nullable'],
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'position' => 1,
        ]);
    }
}
