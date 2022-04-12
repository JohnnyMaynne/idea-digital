<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Vacancy;

class VacancyRepository extends ModuleRepository
{
    use HandleSlugs;

    public function __construct(Vacancy $model)
    {
        $this->model = $model;
    }
}
