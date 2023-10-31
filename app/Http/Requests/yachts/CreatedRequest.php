<?php

namespace App\Http\Requests\yachts;

use Illuminate\Foundation\Http\FormRequest;

class CreatedRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', "min:6", "max:255", "string"],
            'places_available' => ['required', 'min:6', 'integer']
        ];
    }
}
