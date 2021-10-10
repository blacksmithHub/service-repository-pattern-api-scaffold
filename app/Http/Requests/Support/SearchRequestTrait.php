<?php

namespace App\Http\Requests\Support;

use App\Rules\Search\ValidConditionTypeRule;
use App\Rules\Search\ValidDirectionRule;

trait SearchRequestTrait
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function searchRules()
    {
        return [
            'search_criteria' => [
                'required',
                'sometimes'
            ],
            'search_criteria.filter_groups' => [
                'array'
            ],
            'search_criteria.filter_groups.*.filters' => [
                'array',
                'required'
            ],
            'search_criteria.filter_groups.*.filters.*.field' => [
                'string',
                'required'
            ],
            'search_criteria.filter_groups.*.filters.*.value' => [
                'nullable'
            ],
            'search_criteria.filter_groups.*.filters.*.condition_type' => [
                'nullable',
                'string',
                new ValidConditionTypeRule
            ],
            'search_criteria.sort_orders' => [
                'array'
            ],
            'search_criteria.sort_orders.*.field' => [
                'string',
                'required'
            ],
            'search_criteria.sort_orders.*.direction' => [
                'string',
                'required',
                new ValidDirectionRule
            ],
            'search_criteria.relations' => [
                'array',
                'required',
                'sometimes'
            ],
            'page_size' => [
                'required_with:page',
                'sometimes',
                'numeric'
            ],
            'page' => [
                'required_with:page_size',
                'sometimes',
                'numeric'
            ],
            'first' => [
                'required',
                'sometimes',
                'boolean'
            ],
            'take' => [
                'required',
                'sometimes',
                'numeric'
            ],
            'random_order' => [
                'required',
                'sometimes',
                'boolean'
            ]
        ];
    }
}
