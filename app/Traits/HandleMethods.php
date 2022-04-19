<?php

namespace App\Traits;

trait HandleMethods
{
    public function latest($limit = 4)
    {
        return $this->model->latest()->limit($limit)->get();
    }

    public function related($post, $limit = 3)
    {
        return $this->model
            ->whereCategoryId($post->category_id)
            ->where('id','!=',$post->id)
            ->latest()
            ->limit($limit)
            ->get();
    }

}
