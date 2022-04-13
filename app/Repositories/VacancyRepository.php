<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Vacancy;
use CwsDigital\TwillMetadata\Repositories\Behaviours\HandleMetadata;

class VacancyRepository extends ModuleRepository
{
    use HandleSlugs, HandleMedias, HandleMetadata;

    public function __construct(Vacancy $model)
    {
        $this->model = $model;
    }
}
