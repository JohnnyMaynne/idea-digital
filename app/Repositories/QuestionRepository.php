<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\Question;
use App\Traits\HandleMethods;

class QuestionRepository extends ModuleRepository
{
    use HandleMethods;

   protected $title = 'question';

    public function __construct(Question $model)
    {
        $this->model = $model;
    }
}
