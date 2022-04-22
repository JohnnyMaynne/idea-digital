<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\WorksPage;
use CwsDigital\TwillMetadata\Repositories\Behaviours\HandleMetadata;

class WorksPageRepository extends ModuleRepository
{
    use HandleMetadata;


    public function __construct(WorksPage $model)
    {
        $this->model = $model;
    }
}
