<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\TestimonialsPage;
use CwsDigital\TwillMetadata\Repositories\Behaviours\HandleMetadata;

class TestimonialsPageRepository extends ModuleRepository
{
    use HandleMetadata;

    public function __construct(TestimonialsPage $model)
    {
        $this->model = $model;
    }
}
