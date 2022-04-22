<?php

namespace App\Repositories;


use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\AboutUsPage;
use CwsDigital\TwillMetadata\Repositories\Behaviours\HandleMetadata;

class AboutUsPageRepository extends ModuleRepository
{
    use HandleMetadata, HandleMedias;

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
            'alex_name',
            'alex_position',
            'alex',
            'julia_name',
            'julia_position',
            'julia',
        ],
    ];

    protected $relatedBrowsers = [
        'testimonials',
        'clients'
    ];

    public function __construct(AboutUsPage $model)
    {
        $this->model = $model;
    }
}
