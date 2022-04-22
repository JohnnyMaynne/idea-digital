<?php

namespace App\Services\Schema;

use Spatie\SchemaOrg\Schema;

class AuthorSchema extends SchemaBase
{
    public function render(): string
    {
        return Schema::person()
            ->name($this->model->title)
            ->image($this->model->image('cover','default'))
            ->url(route('author',['slug' => $this->model->slug]))
            ->worksFor(Schema::organization()->name('Idea Digital'));
    }
}
