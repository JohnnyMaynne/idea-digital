<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\HasNesting;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;
use App\Models\Presenters\CommentPresenter;
use App\Traits\ClearsResponseCache;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Comment extends Model implements Sortable
{
    use HasPosition, HasNesting, ClearsResponseCache;

    protected $fillable = [
        'published',
        'title',
        'description',
        'position',
    ];


    public string $presenterAdmin = CommentPresenter::class;

    protected $casts = [
        'approved' => 'boolean'
    ];

    public function commentable(): MorphTo
    {
        return $this->morphTo();
    }

    public function getTitleInDashboardAttribute()
    {
        return $this->comment;
    }

}
