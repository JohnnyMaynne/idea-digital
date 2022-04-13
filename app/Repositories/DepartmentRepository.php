<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\Department;

class DepartmentRepository extends ModuleRepository
{
    

    public function __construct(Department $model)
    {
        $this->model = $model;
    }
}
