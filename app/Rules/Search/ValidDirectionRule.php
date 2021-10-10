<?php

namespace App\Rules\Search;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Arr;

class ValidDirectionRule implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return Arr::exists(
            config('constants.search_properties.directions'),
            strtolower($value)
        );
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Invalid direction.';
    }
}
