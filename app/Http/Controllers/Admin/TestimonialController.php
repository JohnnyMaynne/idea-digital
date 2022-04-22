<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class TestimonialController extends BaseModuleController
{
    protected $moduleName = 'testimonials';

    protected $titleColumnKey = 'name';

    protected $indexOptions = [
        'permalink' => false,
    ];

    protected $indexColumns = [
        'image' => [
            'thumb' => true,
            'variant' => [
                'role' => 'cover',
                'crop' => 'default',
            ],
        ],
        'name' => [
            'title' => 'Клиент',
            'field' => 'name',
        ],
        'post' => [
            'title' => 'Должность',
            'field' => 'post',
        ],
        'work' => [
            'title' => 'Кейс',
            'relationship' => 'work',
            'field' => 'title'
        ],
        'text' => [
            'title' => 'Отзыв',
            'field' => 'text',
        ]
    ];
}
