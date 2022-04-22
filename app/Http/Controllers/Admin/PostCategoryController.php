<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class PostCategoryController extends BaseModuleController
{
    protected $moduleName = 'postCategories';

    protected $permalinkBase = 'blog/category';

    protected $indexOptions = [
    ];


    protected function formData($request)
    {
        return [
            'metadata_card_type_options' => config('metadata.card_type_options'),
            'metadata_og_type_options' => config('metadata.opengraph_type_options'),
        ];
    }
}
