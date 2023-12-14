<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class AgeRule implements ValidationRule
{
    const AVAILABLE_OPTIONS_AGE = [
        'adult',
        'kid',
    ];
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!in_array($value, self::AVAILABLE_OPTIONS_AGE)) {
            $fail(__('validation.age_not_available'));
        }
    }
}
