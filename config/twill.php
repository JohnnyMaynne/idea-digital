<?php

return [
    'locale' => 'ru',
    'block_editor' => [
        'crops' => [
            'image' => [
                'desktop' => [
                    [
                        'name' => 'desktop',
                        'ratio' => 16 / 9,
                        'minValues' => [
                            'width' => 100,
                            'height' => 100,
                        ],
                    ],
                ],
                'free' => [
                    [
                        'name' => 'free',
                        'ratio' =>  'auto',
                    ],
                ],
            ],
        ],
    ],
    'glide' => [
        'default_params' => [
            'fm' => 'jpg',
            'q' => '100',
            'fit' => 'max',
        ],
    ]
];
