<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\JobsPage;
use CwsDigital\TwillMetadata\Repositories\Behaviours\HandleMetadata;

class JobsPageRepository extends ModuleRepository
{
    use HandleMetadata;

    protected $fieldsGroups = [
        'content' => [
            'page_description',
            'section_title',
            'section_description',
        ],
    ];

    public function __construct(JobsPage $model)
    {
        $this->model = $model;
    }
}
