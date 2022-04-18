<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;
use App\Repositories\AuthorRepository;
use App\Repositories\PostCategoryRepository;

class PostController extends BaseModuleController
{
    protected $moduleName = 'posts';

    protected $permalinkBase = 'blog';

    protected $previewView = 'site.pages.blog-single';

    protected $indexOptions = [
    ];

    protected function formData($request)
    {
        return [
            'categories' => app(PostCategoryRepository::class)->listAll(),
            'authors' => app(AuthorRepository::class)->listAll(),
            'metadata_card_type_options' => config('metadata.card_type_options'),
            'metadata_og_type_options' => config('metadata.opengraph_type_options'),
        ];
    }
}
