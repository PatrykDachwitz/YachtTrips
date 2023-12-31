<?php
declare(strict_types=1);
namespace App\Http\Requests\Users;

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
            'name' => ['required', 'string', "max:255"],
            'email' => ['required', 'email', "max:255"],
            'security' => ['required', 'integer'],
            'super_admin' => ['required', 'boolean'],
            'password' => ['required', 'string', 'confirmed', "max:255"],
        ];
    }
}
