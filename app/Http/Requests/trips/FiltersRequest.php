<?php
declare(strict_types=1);
namespace App\Http\Requests\trips;

use Illuminate\Foundation\Http\FormRequest;

class FiltersRequest extends FormRequest
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
            'start_day' => ['date_format:Y-m-d', "nullable"],
            'end_day' => ['date_format:Y-m-d', 'nullable'],
            'yacht_id.*' => ['integer'],
            'ocean_id.*' => ['integer'],
            'count_day.*' => ['integer'],
            'pagination' => ['integer'],
        ];
    }
}
