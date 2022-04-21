<?php

namespace App\Models;


use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRelated;
use A17\Twill\Models\Model;
use CwsDigital\TwillMetadata\Models\Behaviours\HasMetadata;

class HomePage extends Model
{
    use HasMedias, HasMetadata, HasRelated;

    protected $fillable = [
        'title',
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
