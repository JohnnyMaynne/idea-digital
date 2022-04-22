<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;
use App\Traits\ClearsResponseCache;


class Question extends Model implements Sortable
{
    use HasPosition, ClearsResponseCache;

    protected $fillable = [
        'published',
        'question',
        'answer',
        'position',
    ];

    public function getTitleInBrowserAttribute()
    {
        return $this->question;
    }

}
