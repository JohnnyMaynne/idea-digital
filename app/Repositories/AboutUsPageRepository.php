<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\AboutUsPage;
use CwsDigital\TwillMetadata\Repositories\Behaviours\HandleMetadata;

class AboutUsPageRepository extends ModuleRepository
{
    use HandleMetadata;

    public function __construct(AboutUsPage $model)
    {
        $this->model = $model;
    }
}
