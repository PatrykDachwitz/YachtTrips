<?php
declare(strict_types=1);
namespace App\Http\Requests\Rooms;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'premium' => ['boolean'],
            'double_beds' => ['integer'],
            'single_beds' => ['integer'],
            'kids_beds' => ['integer'],
            'adults' => ['integer'],
            'kids' => ['integer'],
            'name' => ['string', 'max:255']
        ];
    }
}
