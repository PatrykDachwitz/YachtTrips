<?php

namespace App\Http\Requests\vacationers;

use App\Rules\AgeRule;
use Illuminate\Foundation\Http\FormRequest;

class ManyUpdateRequest extends FormRequest
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
            'id.*' => ['integer', 'min:1'],
            'first_name.*' => ['string', "max:255"],
            'last_name.*' => ['string', "max:255"],
            'book_id.*' => ['integer'],
        ];
    }
}
