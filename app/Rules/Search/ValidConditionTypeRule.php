<?php

namespace App\Rules\Search;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Arr;

class ValidConditionTypeRule implements Rule
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
            array_merge(config('constants.search_properties.condition_types.common'), config('constants.search_properties.condition_types.special')),
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
        return 'Invalid condition type.';
    }
}
