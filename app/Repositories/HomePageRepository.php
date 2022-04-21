<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\HomePage;
use CwsDigital\TwillMetadata\Repositories\Behaviours\HandleMetadata;

class HomePageRepository extends ModuleRepository
{
    use HandleMetadata;

    protected $relatedBrowsers = ['works','posts','testimonials','questions','clients'];

    public function __construct(HomePage $model)
    {
        $this->model = $model;
    }
}
