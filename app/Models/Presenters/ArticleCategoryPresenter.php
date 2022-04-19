<?php

namespace App\Models\Presenters;

class ArticleCategoryPresenter extends Presenter
{
    public function getArticlesCount(): int
    {
        return count($this->articles);
    }
}
