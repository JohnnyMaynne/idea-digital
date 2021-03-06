<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Author;
use CwsDigital\TwillMetadata\Repositories\Behaviours\HandleMetadata;

class AuthorRepository extends ModuleRepository
{
    use HandleSlugs, HandleMedias, HandleMetadata;

    public function __construct(Author $model)
    {
        $this->model = $model;
    }
}
