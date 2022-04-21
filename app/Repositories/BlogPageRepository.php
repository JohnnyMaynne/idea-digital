<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\BlogPage;
use CwsDigital\TwillMetadata\Repositories\Behaviours\HandleMetadata;

class BlogPageRepository extends ModuleRepository
{
    use HandleMetadata;

    public function __construct(BlogPage $model)
    {
        $this->model = $model;
    }
}
