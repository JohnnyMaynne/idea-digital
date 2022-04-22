<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class VacancyController extends BaseModuleController
{
    protected $moduleName = 'vacancies';

    protected $permalinkBase = 'jobs';

    protected $indexOptions = [
        'reorder' => true
    ];

    protected $indexColumns = [
        'title' => [
            'title' => 'Заголовок',
            'field' => 'title',
        ],
        'title' => [
            'title' => 'Title',
            'field' => 'title',
        ],
        'title' => [
            'title' => 'Title',
            'field' => 'title',
        ],
        'title' => [
            'title' => 'Title',
            'field' => 'title',
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
