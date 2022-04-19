<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Author;
use App\Models\Post;
use App\Traits\HandleMethods;
use Arr;
use CwsDigital\TwillMetadata\Repositories\Behaviours\HandleMetadata;

class PostRepository extends ModuleRepository
{
    use HandleBlocks, HandleSlugs, HandleMedias, HandleRevisions, HandleMetadata, HandleMethods;

    public function __construct(Post $model)
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
