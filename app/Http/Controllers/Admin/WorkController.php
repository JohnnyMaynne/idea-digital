<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;
use App\Repositories\AuthorRepository;

class WorkController extends BaseModuleController
{
    protected $moduleName = 'works';

    protected $permalinkBase = 'cases';

    protected $indexOptions = [
    ];

    protected function formData($request)
    {
        return [
            'authors' => app(AuthorRepository::class)->listAll(),
            'metadata_card_type_options' => config('metadata.card_type_options'),
            'metadata_og_type_options' => config('metadata.opengraph_type_options'),
        ];
    }
}
