<?php
declare(strict_types=1);
namespace App\Http\Requests\orders;

use App\Rules\NumberPhoneRule;
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
            "personal_mail" => ['required', "email"],
            "personal_phone" => ['required', new NumberPhoneRule],
            "personal_first_name" => ['required', "string"],
            "personal_last_name" => ['required', "string"],
            "address" => ['required', "string"],
            "correspondenceAddress" => ["string"],
            "price" => ['min:1', "integer"],
        ];
    }
}
