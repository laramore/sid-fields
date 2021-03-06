<?php

namespace Laramore\Fields;

return [

    /*
    |--------------------------------------------------------------------------
    | Default sid fields
    |--------------------------------------------------------------------------
    |
    | This option defines the default sid fields.
    |
    */

    Sid::class => [
        'type' => 'bigInteger',
        'property_keys' => [
            'nullable', 'default',
        ],
    ],
    PrimarySid::class => [
        'type' => 'bigInteger',
        'property_keys' => [
            'nullable', 'default',
        ],
    ],
    ManyToOneSid::class => [

    ],
    ManyToManySid::class => [

    ],
    OneToOneSid::class => [

    ],

];
