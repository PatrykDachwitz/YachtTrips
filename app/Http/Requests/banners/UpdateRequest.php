<?php

namespace App\Http\Requests\banners;

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
            'name' => ["min:6", "max:255", "string"],
            'start_at' => ['date_format:Y-m-d H:i:s'],
            'finish_at' => ['date_format:Y-m-d H:i:s'],
            'active' => "boolean",
            'category_banner_id' => ["integer", "min:1"],
            'description' => ['string'],
            'href' => ['string'],
            'images.*.id' => ['integer'],
            'images.*.devices' => ['string'],
        ];
    }
}
