<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleNesting;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Comment;

class CommentRepository extends ModuleRepository
{
    use HandleNesting;

    public function __construct(Comment $model)
    {
        $this->model = $model;
    }
}
