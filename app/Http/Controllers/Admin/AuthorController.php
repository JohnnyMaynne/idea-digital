<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class AuthorController extends BaseModuleController
{
    protected $moduleName = 'authors';

    protected $indexOptions = [
        'reorder' => true
    ];

    protected $indexColumns = [
        'image' => [
            'thumb' => true,
            'variant' => [
                'role' => 'cover',
                'crop' => 'default',
            ],
        ],
        'title' => [
            'title' => 'Имя автора',
            'field' => 'title',
        ],
        'postsCount' => [
            'title' => 'Статей',
            'field' => 'postsCount',
            'present' => true,
        ],
        'worksCount' => [
            'title' => 'Кейсов',
            'field' => 'worksCount',
            'present' => true,
        ],
    ];

    protected function formData($request)
    {
        return [
            'metadata_card_type_options' => config('metadata.card_type_options'),
            'metadata_og_type_options' => config('metadata.opengraph_type_options'),
        ];
    }
}
