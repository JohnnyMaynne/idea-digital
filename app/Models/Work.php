<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;
use App\Traits\HasAuthor;
use App\Traits\HasComments;
use CwsDigital\TwillMetadata\Models\Behaviours\HasMetadata;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Work extends Model implements Sortable, Viewable, Searchable
{
    use HasBlocks, HasSlug, HasMedias, HasRevisions, HasPosition, HasMetadata, HasAuthor, HasComments, InteractsWithViews;

    public $metadataFallbacks = [];

    protected $fillable = [
        'published',
        'title',
        'description',
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

    public function testimonial(): HasOne
    {
        return $this->hasOne(Work::class);
    }


    public function getSearchResult(): SearchResult
    {
        $url = route('cases.single', $this->slug);

        return new \Spatie\Searchable\SearchResult(
            $this,
            $this->title,
            $url,
        );
    }
}
