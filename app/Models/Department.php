<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;
use App\Traits\ClearsResponseCache;


class Department extends Model implements Sortable
{
    use HasPosition, ClearsResponseCache;

    protected $fillable = [
        'published',
        'title',
        'description',
        'position',
    ];

}
