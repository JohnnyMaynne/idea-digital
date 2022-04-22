<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class EmployeeController extends BaseModuleController
{
    protected $moduleName = 'employees';

    protected $indexOptions = [
        'permalink' => false,
        'reorder' => true,
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
            'title' => 'Имя',
            'field' => 'title',
        ],
    ];
}
