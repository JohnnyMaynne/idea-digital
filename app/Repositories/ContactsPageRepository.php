<?php

namespace App\Repositories;


use A17\Twill\Repositories\ModuleRepository;
use App\Models\ContactsPage;
use CwsDigital\TwillMetadata\Repositories\Behaviours\HandleMetadata;

class ContactsPageRepository extends ModuleRepository
{
    use HandleMetadata;

    public function __construct(ContactsPage $model)
    {
        $this->model = $model;
    }
}
