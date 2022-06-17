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
        'options' => [
            'select', 'visible', 'fillable', 'required',
        ],
    ],
    PrimarySid::class => [
        'options' => [
            'select', 'visible',
        ],
    ],
    ManyToOneSid::class => [
        'options' => [
            'visible', 'fillable', 'required',
        ],
        'fields' => [
            'sid' => Sid::class,
            'reversed' => Reversed\HasMany::class,
        ],
        'templates' => [
            'sid' => '${name}_${sidentifier}',
            'reversed' => '+{modelname}',
            'self_reversed' => 'reversed_+{name}',
        ],
    ],
    ManyToManySid::class => [
        'options' => [
            'visible', 'fillable',
        ],
        'pivot_namespace' => 'App\\Pivots',
        'fields' => [
            'reversed' => Reversed\BelongsToMany::class,
        ],
        'pivot_field' => ManyToOneSid::class,
        'templates' => [
            'reversed' => '+{modelname}',
            'pivot' => 'pivot',
            'reversed_pivot' => 'pivot',
            'self_reversed' => 'reversed_+{name}',
            'self_reversed_pivot' => 'reversed_+{modelname}',
        ],
    ],
    OneToOneSid::class => [
        'options' => [
            'visible', 'fillable', 'required',
        ],
        'fields' => [
            'sid' => UniqueSid::class,
            'reversed' => Reversed\HasOne::class,
        ],
        'templates' => [
            'sid' => '${name}_${sidentifier}',
            'reversed' => '${modelname}',
            'self_reversed' => 'reversed_+{name}',
        ],
    ],
];
