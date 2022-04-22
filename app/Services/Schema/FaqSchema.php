<?php

namespace App\Services\Schema;

use Spatie\SchemaOrg\Schema;

class FaqSchema extends SchemaBase
{

    public function render(): string
    {
        $questions = $this->model->getRelated('questions');


        if (!count($questions)) {
            return '';
        }

        $count = 1;
        $items = [];

        foreach ($questions as $item) {
            $items[] = Schema::question()
                ->name($item->question)
                ->acceptedAnswer(
                    Schema::answer()
                        ->text(strip_tags($item->answer))
                );
            $count++;
        }

        return Schema::fAQPage()
            ->mainEntity($items);
    }
}
