<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\TeamPage;
use CwsDigital\TwillMetadata\Repositories\Behaviours\HandleMetadata;

class TeamPageRepository extends ModuleRepository
{
    use HandleMetadata;

    protected $fieldsGroups = [
        'content' => [
            'section_title',
            'section_description',
        ],
    ];

    public function __construct(TeamPage $model)
    {
        $this->model = $model;
    }
}
