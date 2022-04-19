<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\Question;
use App\Traits\HandleMethods;

class QuestionRepository extends ModuleRepository
{
    use HandleMethods;

    public function __construct(Question $model)
    {
        $this->model = $model;
    }
}
