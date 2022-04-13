<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class EmailController extends BaseModuleController
{
    protected $moduleName = 'emails';

    protected $indexOptions = [
        'permalink' => false,
    ];
}
