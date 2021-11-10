<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventUpdateRequest extends FormRequest
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
            'title' => ['required'],
            'summary' => ['required'],
            'description' => ['required'],
            'image' => ['nullable', 'url'],
            'date' => ['nullable', 'date'],
            'publishStatus' => ['required', 'boolean'],
            'location' => ['nullable'],
            'venue' => ['nullable'],
        ];
    }
}
