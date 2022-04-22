<?php

namespace App\Models;


use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Model;
use App\Traits\ClearsResponseCache;
use CwsDigital\TwillMetadata\Models\Behaviours\HasMetadata;

class WorksPage extends Model
{
    use HasMedias, HasMetadata, ClearsResponseCache;

    protected $fillable = [
        'title',
        'content'
    ];

    protected $casts = [
        'content' => 'array'
    ];

    public $timestamps = false;

    public $metadataFallbacks = [];

    public $mediasParams = [
        'cover' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 'auto',
                ],
            ],
        ],
    ];
}
