<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRelated;
use A17\Twill\Models\Model;
use App\Traits\ClearsResponseCache;
use CwsDigital\TwillMetadata\Models\Behaviours\HasMetadata;

class SeoPage extends Model
{
    use HasBlocks, HasRelated, HasMedias, HasMetadata, ClearsResponseCache;

    protected $fillable = [
        'title',
        'description',
        'steps',
        'content'
    ];

    protected $casts = [
        'steps' => 'array',
        'content' => 'array',
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
