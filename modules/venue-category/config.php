<?php

return [
    '__name' => 'venue-category',
    '__version' => '0.0.2',
    '__git' => 'git@github.com:getmim/venue-category.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/venue-category' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'venue' => NULL
            ],
            [
                'lib-formatter' => NULL
            ],
            [
                'lib-model' => NULL
            ],
            [
                'lib-user' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'VenueCategory\\Model' => [
                'type' => 'file',
                'base' => 'modules/venue-category/model'
            ]
        ],
        'files' => []
    ],
    'libFormatter' => [
        'formats' => [
            'venue-category-chain' => [
                'id' => [
                    'type' => 'number'
                ],
                'user' => [
                    'type' => 'object',
                    'model' => [
                        'name'  => 'LibUser\\Library\\Fetcher',
                        'field' => 'id',
                        'type'  => 'number'
                    ],
                    'format' => 'user'
                ],
                'vanue_category' => [
                    'type' => 'object',
                    'model' => [
                        'name'  => 'VenueCategory\\Library\\VenueCategory',
                        'field' => 'id',
                        'type'  => 'number'
                    ],
                    'format' => 'venue-category'
                ],
                'venue' => [
                    'type' => 'object',
                    'model' => [
                        'name'  => 'Venue\\Model\\Venue',
                        'field' => 'id',
                        'type'  => 'number'
                    ],
                    'format' => 'venue'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ],
            'venue-category' => [
                'id' => [
                    'type' => 'number'
                ],
                'user' => [
                    'type' => 'object',
                    'model' => [
                        'name'  => 'LibUser\\Library\\Fetcher',
                        'field' => 'id',
                        'type'  => 'number'
                    ],
                    'format' => 'user'
                ],
                'name' => [
                    'type' => 'text'
                ],
                'slug' => [
                    'type' => 'text'
                ],
                'content' => [
                    'type' => 'text'
                ],
                'meta' => [
                    'type' => 'json'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ],
            'venue' => [
                'category' => [
                    'type' => 'chain',
                    'chain' => [
                        'model' => [
                            'name' => 'VenueCategory\\Model\\VenueCategoryChain',
                            'field' => 'venue'
                        ],
                        'identity' => 'venue_category'
                    ],
                    'model' => [
                        'name' => 'VenueCategory\\Model\\VenueCategory',
                        'field' => 'id'
                    ],
                    'format' => 'venue-category'
                ]
            ]
        ]
    ]
];