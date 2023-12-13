<?php
declare(strict_types=1);
namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class NumberPhoneRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $customValue = str_replace(" ", "", $value);
        $customValue = str_replace("-", "", $customValue);

        if (!preg_match('/^[+]{0,1}+[0-9]{9,12}$/', $customValue)) {
            $fail(__('validation.phone_error_format'));
        }
    }
}
