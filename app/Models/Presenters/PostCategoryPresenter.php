<?php

namespace App\Models\Presenters;

class PostCategoryPresenter extends Presenter
{
    public function getArticlesCount(): int
    {
        return count($this->posts);
    }
}
