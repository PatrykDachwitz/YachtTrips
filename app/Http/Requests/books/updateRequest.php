<?php

namespace App\Http\Requests\books;

use Illuminate\Foundation\Http\FormRequest;

class updateRequest extends FormRequest
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
            "trip_id" => ['required', 'min:1', "integer"],
            "number_room" => ['required', 'min:1', "integer"],
            "count_adult" => ['required', 'min:1', "integer"],
            "count_kids" => ["integer"],
            "double_beds" => ['required', "integer"],
            "single_beds" => ['required', "integer"],
            "kids_beds" => ["integer"],
            "price" => ['required', 'min:1', "integer"],
        ];
    }
}
