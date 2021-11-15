<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialUpdateRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:400'],
            'image' => ['string', 'max:400'],
            'description' => ['required', 'string', 'max:800'],
            'name' => ['required', 'string', 'max:400'],
            'company' => ['required', 'string', 'max:400'],
            'publishStatus' => ['required', 'boolean']
        ];
    }
}
