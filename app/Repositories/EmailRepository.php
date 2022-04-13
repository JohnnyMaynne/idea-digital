<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\Email;

class EmailRepository extends ModuleRepository
{
    

    public function __construct(Email $model)
    {
        $this->model = $model;
    }
}
