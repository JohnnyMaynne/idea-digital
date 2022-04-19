<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Work;
use CwsDigital\TwillMetadata\Repositories\Behaviours\HandleMetadata;

class WorkRepository extends ModuleRepository
{
    use HandleBlocks, HandleSlugs, HandleMedias, HandleRevisions, HandleMetadata;

    public function __construct(Work $model)
    {
        $this->model = $model;
    }


    public function getFormFields($object): array
    {
        $fields = parent::getFormFields($object);

        $fields['author_id'] = $object->getAuthor()->id ?? null;

        return $fields;
    }

    public function afterSave($object, $fields)
    {
        $object->author()->sync($fields['author_id'] ?? []);

        parent::afterSave($object, $fields);
    }
}
