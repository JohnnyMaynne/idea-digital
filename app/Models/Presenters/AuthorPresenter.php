<?php

namespace App\Models\Presenters;

class AuthorPresenter extends Presenter
{

    public function postsCount(): int
    {
        return count($this->posts);
    }

    public function worksCount(): int
    {
        return count($this->works);
    }
}
