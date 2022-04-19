<?php

namespace App\Models\Presenters;

class CommentPresenter extends Presenter
{
    public function getCommentUser(): string
    {
        $string = '<a href="mailto:' . $this->email .'" target="_blank" >' . $this->email .'</a>';
        $string .= '<div style="margin-top: 10px;">' . $this->name . '</div>';

        return $string;
    }
}
