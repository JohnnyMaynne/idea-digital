<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class QuestionController extends BaseModuleController
{
    protected $moduleName = 'questions';

    protected $indexOptions = [
        'permalink' => false,
    ];
}
