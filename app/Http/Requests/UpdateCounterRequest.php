<?php

namespace App\Http\Requests;

use App\Models\Counter;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCounterRequest extends FormRequest
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
            'min' => ['required', 'integer', 'gt:0'],
            'max' => ['required', 'integer'],
            'prefix' => ['string'],
            'publishStatus' => ['nullable', 'boolean'],
            'type' => ['required', 'in:' . implode(",", Counter::TYPE)]
        ];
    }
}
