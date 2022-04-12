<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Employee;

class EmployeeRepository extends ModuleRepository
{
    use HandleMedias;

    public function __construct(Employee $model)
    {
        $this->model = $model;
    }
}
