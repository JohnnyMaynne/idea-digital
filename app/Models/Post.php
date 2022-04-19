<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Model;
use App\Traits\HasAuthor;
use App\Traits\HasComments;
use CwsDigital\TwillMetadata\Models\Behaviours\HasMetadata;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use willvincent\Rateable\Rateable;

class Post extends Model implements Viewable
{
    use HasBlocks, HasSlug, HasMedias, HasRevisions, HasMetadata, HasAuthor, HasComments, InteractsWithViews, Rateable;

    public $metadataFallbacks = [];

    protected $fillable = [
        'published',
        'title',
        'category_id',
        'publish_start_date',
        'publish_end_date',
    ];

    public $slugAttributes = [
        'title',
    ];

    public $mediasParams = [
        'cover' => [
            'default' => [
                [
                    'name' => 'article',
                    'ratio' => 1425 / 640,
                ],
            ],
            'card' => [
                [
                    'name' => 'card',
                    'ratio' => 610 / 345,
                ],
            ],
        ],
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(PostCategory::class,'category_id','id');
    }

}
