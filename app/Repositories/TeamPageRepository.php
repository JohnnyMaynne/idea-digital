<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\TeamPage;
use CwsDigital\TwillMetadata\Repositories\Behaviours\HandleMetadata;

class TeamPageRepository extends ModuleRepository
{
    use HandleMetadata;

    public function __construct(TeamPage $model)
    {
        $this->model = $model;
    }
}
