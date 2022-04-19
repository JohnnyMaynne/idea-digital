<?php

namespace App\Models\Presenters;

class AuthorPresenter extends Presenter
{
    public function getArticlesCount(): int
    {
        return count($this->articles);
    }
}
