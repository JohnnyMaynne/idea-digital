<?php

namespace App\Traits;


use App\Models\Author;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

trait HasAuthor
{

    public function author(): MorphToMany
    {
          return $this->morphToMany(Author::class, 'authorable');
    }


    public function getAuthor()
    {
        return $this->author()->first();
    }


    public function getAuthorAttribute()
    {
        return $this->getAuthor();
    }

}
