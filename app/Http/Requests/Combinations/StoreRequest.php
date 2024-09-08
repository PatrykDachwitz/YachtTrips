<?php

namespace App\Http\Requests\Combinations;

use App\Rules\AvailableOptionsCombinations;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'id' => ['required', 'integer', 'min:1'],
            'type' => ['required', 'string', new AvailableOptionsCombinations()],
            'rooms.*.id' => ['required', 'integer'],
            'rooms.*.count' => ['required', 'integer'],
            'rooms.*.price' => ['required', 'integer'],
        ];
    }
}
