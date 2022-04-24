<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleJsonRepeaters;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\SeoPage;
use CwsDigital\TwillMetadata\Repositories\Behaviours\HandleMetadata;

class SeoPageRepository extends ModuleRepository
{
    use HandleBlocks, HandleJsonRepeaters, HandleMetadata;

    protected $relatedBrowsers = [
        'works'
    ];

    protected array $jsonRepeaters = [
        'steps'
    ];

    public function __construct(SeoPage $model)
    {
        $this->model = $model;
    }
}
