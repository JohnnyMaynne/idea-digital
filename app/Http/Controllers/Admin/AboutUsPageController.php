<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\SingletonModuleController as BaseModuleController;

class AboutUsPageController extends BaseModuleController
{
    protected $moduleName = 'aboutUsPages';

    protected $indexOptions = [
        'permalink' => false,
    ];

    protected function formData($request)
    {
        return [
            'metadata_card_type_options' => config('metadata.card_type_options'),
            'metadata_og_type_options' => config('metadata.opengraph_type_options'),
        ];
    }
}
