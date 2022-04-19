<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Testimonial;
use App\Traits\HandleMethods;

class TestimonialRepository extends ModuleRepository
{
    use HandleMedias, HandleFiles, HandleMethods;

    public function __construct(Testimonial $model)
    {
        $this->model = $model;
    }

    public function getFormFields($object): array
    {
        $fields = parent::getFormFields($object);
        $fields['browsers']['work'] = $this->getFormFieldsForBrowser($object, 'work','content','title','works');
        return $fields;
    }

    public function afterSave($object, $fields)
    {
        $this->updateBrowser($object, $fields, 'work');
        parent::afterSave($object, $fields);
    }
}
