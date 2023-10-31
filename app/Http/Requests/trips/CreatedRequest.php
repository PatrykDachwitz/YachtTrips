<?php

namespace App\Http\Requests\trips;

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
            'start_day' => ['required', 'date_format:Y-m-d H:i:s'],
            'end_day' => ['required', 'date_format:Y-m-d H:i:s'],
            'yacht_id' => ['required', 'min:1', 'integer'],
            'ocean_id' => ['required', 'min:1', 'integer'],
            'count_day' => ['required', 'min:1', 'integer'],
            'template_id' => ['required', 'integer'],
        ];
    }
}
