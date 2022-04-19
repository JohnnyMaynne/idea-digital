<?php

namespace App\Models\Presenters;

use A17\Twill\Models\Model;

abstract class Presenter
{
    protected Model $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }


    public function __get($property)
    {
        if (method_exists($this, $property)) {
            return $this->{$property}();
        }

        return $this->model->{$property};
    }


    public function getCreatedAtFormat()
    {
        return $this->created_at->format('d, M Y');
    }


    public function getUpdatedAtFormat()
    {
        return $this->updated_at->format('d, M Y');
    }

}
