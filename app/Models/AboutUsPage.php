<?php

namespace App\Models;


use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRelated;
use A17\Twill\Models\Model;
use App\Traits\ClearsResponseCache;
use CwsDigital\TwillMetadata\Models\Behaviours\HasMetadata;

class AboutUsPage extends Model
{
    use HasMedias, HasMetadata, HasRelated, ClearsResponseCache;

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
        'alex' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 'auto',
                ],
            ],
        ],
        'julia' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 'auto',
                ],
            ],
        ],
    ];

    public function getField($field) {
        return $this->content[$field] ?? null;
    }

}
