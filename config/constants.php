<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Constants
    |--------------------------------------------------------------------------
    |
    | This is where we declare the constants in our application.
    |
    */

    'models' => [
        'user' => [
            //
        ]
    ],
    'search_properties' => [
        'condition_types' => [
            'common' => [
                'eq' => '=',
                'gt' => '>',
                'gteq' => '>=',
                'like' => 'like',
                'lt' => '<',
                'lteq' => '<=',
                'neq' => '!=',
            ],
            'special' => [
                'between' => 'between',
                'in' => 'in',
                'nin' => 'nin',
                'notnull' => 'notnull',
                'null' => 'null'
            ]
        ],
        'directions' => [
            'asc',
            'desc'
        ]
    ]
];
