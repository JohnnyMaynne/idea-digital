<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\AboutUsPage;
use CwsDigital\TwillMetadata\Repositories\Behaviours\HandleMetadata;

class AboutUsPageRepository extends ModuleRepository
{
    use HandleMetadata;

    protected $fieldsGroups = [
        'content' => [
            'about_title',
            'about_description',
            'team_title',
            'team_description',
            'testimonials_title',
            'testimonials_description',
            'clients_title',
            'clients_description',
        ],
    ];

    public function __construct(AboutUsPage $model)
    {
        $this->model = $model;
    }
}
