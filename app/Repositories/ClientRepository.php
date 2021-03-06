<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Client;
use App\Traits\HandleMethods;

class ClientRepository extends ModuleRepository
{
    use HandleMedias, HandleMethods;

    public function __construct(Client $model)
    {
        $this->model = $model;
    }
}
