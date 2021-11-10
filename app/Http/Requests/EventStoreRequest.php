<?php

namespace App\Http\Requests;

use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;

class EventStoreRequest extends FormRequest
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
            'slug' => ['required'],
            'position' => ['nullable'],
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'slug' => Str::slug(request()->title) . '' . now()->timestamp,
            'position' => 1,
        ]);
    }
}
