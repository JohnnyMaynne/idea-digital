<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\HomePage;
use CwsDigital\TwillMetadata\Repositories\Behaviours\HandleMetadata;

class HomePageRepository extends ModuleRepository
{
    use HandleMetadata;

    protected $fieldsGroups = [
        'content' => [
            'cases_title',
            'cases_description',
            'clients_title',
            'clients_description',
            'posts_title',
            'posts_description',
            'testimonials_title',
            'testimonials_description',
            'questions_title',
            'questions_description',
            'contacts_title',
            'contacts_description',

        ],
    ];

    protected $relatedBrowsers = [
        'works',
        'posts',
        'testimonials',
        'questions',
        'clients'
    ];

    public function __construct(HomePage $model)
    {
        $this->model = $model;
    }
}
