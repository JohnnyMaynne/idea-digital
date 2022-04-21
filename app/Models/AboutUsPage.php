<?php

namespace App\Models;


use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Model;
use CwsDigital\TwillMetadata\Models\Behaviours\HasMetadata;

class AboutUsPage extends Model
{

    use HasMedias, HasMetadata;

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
