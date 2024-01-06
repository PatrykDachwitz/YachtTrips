<?php
declare(strict_types=1);
namespace App\Http\Requests\Rooms;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'double_beds' => ['required', 'integer'],
            'single_beds' => ['required', 'integer'],
            'kids_beds' => ['required', 'integer'],
            'adults' => ['required', 'integer'],
            'kids' => ['required', 'integer'],
            'name' => ['required', 'string', 'max:255'],
        ];
    }
}
