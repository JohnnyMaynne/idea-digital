<?php

namespace App\Services\Schema;

use A17\Twill\Models\Model;

abstract class SchemaBase
{

    protected Model $model;

    abstract public function render(): string;

    public function setModel(Model $model): SchemaBase
    {
        $this->model = $model;

        return $this;
    }


}
