<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;
use CwsDigital\TwillMetadata\Models\Behaviours\HasMetadata;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Author extends Model implements Sortable
{
    use HasSlug, HasMedias, HasPosition, HasMetadata;

    public $metadataFallbacks = [];

    protected $fillable = [
        'published',
        'title',
        'position',
    ];

    public $slugAttributes = [
        'title',
    ];

    public $mediasParams = [
        'cover' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 9 / 16,
                ],
            ],
        ],
    ];


    public function posts(): MorphToMany
    {
        return $this->morphedByMany(Post::class, 'authorable');
    }


    public function works(): MorphToMany
    {
        return $this->morphedByMany(Work::class, 'authorable');
    }

}
