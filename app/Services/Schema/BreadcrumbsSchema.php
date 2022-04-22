<?php

namespace App\Services\Schema;

use Spatie\SchemaOrg\Schema;
use Tabuna\Breadcrumbs\BreadcrumbsComponent;

class BreadcrumbsSchema extends SchemaBase
{

    public function render(): string
    {
        $array =  app(BreadcrumbsComponent::class)->generate();

        if (!$array->count() > 1) {
            return '';
        }

        $count = 1;
        $items = [];

        foreach ($array as $item) {
            $items[] = Schema::listItem()
                ->position($count)
                ->name($item->title())
                ->item($item->url());
            $count++;
        }

        return Schema::breadcrumbList()
            ->itemListElement($items);
    }
}
