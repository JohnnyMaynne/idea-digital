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
}
