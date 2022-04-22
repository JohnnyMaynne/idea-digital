<?php

namespace App\Services\Schema;

class SchemaRender
{
    private array $list = [];


    public function generate(): string
    {
        $render = '';


        foreach ($this->list as $item)
        {
            $render .= $item->render();
        }


        return  $render;
    }


    public function addSchema(SchemaBase $schema)
    {
        $this->list[] = $schema;
    }

}
