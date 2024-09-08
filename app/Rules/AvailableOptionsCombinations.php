<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class AvailableOptionsCombinations implements ValidationRule
{
    const AVAILABLE_OPTION_COMBINATIONS = [
        'saveOnlyNew',
        'addNewWithoutCurrent',
    ];

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!in_array($value, self::AVAILABLE_OPTION_COMBINATIONS)) {
            $fail(__('validation.not_available'));
        }
    }
}
