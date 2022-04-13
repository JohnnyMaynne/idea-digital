<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class DepartmentController extends BaseModuleController
{
    protected $moduleName = 'departments';

    protected $indexOptions = [
        'permalink' => false,
    ];
}
