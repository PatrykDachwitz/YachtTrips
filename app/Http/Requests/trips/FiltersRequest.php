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
            'filters.start_day' => ['date_format:Y-m-d'],
            'filters.end_day' => ['date_format:Y-m-d'],
            'filters.yacht_id.*' => ['integer'],
            'filters.ocean_id.*' => ['integer'],
            'filters.template_id.*' => ['integer'],
            'filters.count_day.*' => ['integer'],
        ];
    }
}
