<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;
use App\Traits\ClearsResponseCache;


class Client extends Model implements Sortable
{
    use HasMedias, HasPosition, ClearsResponseCache;

    protected $fillable = [
        'published',
        'title',
        'position',
    ];

    public $mediasParams = [
        'cover' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 1,
                ],
            ],
        ],
    ];
}
