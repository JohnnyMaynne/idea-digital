<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\PostCategory;
use CwsDigital\TwillMetadata\Repositories\Behaviours\HandleMetadata;

class PostCategoryRepository extends ModuleRepository
{
    use HandleSlugs,HandleMedias, HandleMetadata;

    public function __construct(PostCategory $model)
    {
        $this->model = $model;
    }
}
