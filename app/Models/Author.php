<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;
use App\Traits\ClearsResponseCache;
use CwsDigital\TwillMetadata\Models\Behaviours\HasMetadata;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Author extends Model implements Sortable, Searchable
{
    use HasSlug, HasMedias, HasPosition, HasMetadata, ClearsResponseCache;

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
                    'ratio' => 1,
                ],
            ],
        ],
    ];

    public function getSearchResult(): SearchResult
    {
        $url = route('author', $this->slug);

        return new \Spatie\Searchable\SearchResult(
            $this,
            $this->title,
            $url,
        );
    }


    public function posts(): MorphToMany
    {
        return $this->morphedByMany(Post::class, 'authorable');
    }


    public function works(): MorphToMany
    {
        return $this->morphedByMany(Work::class, 'authorable');
    }

}
