<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;
use App\Traits\ClearsResponseCache;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Testimonial extends Model implements Sortable
{
    use HasMedias, HasFiles, HasPosition, ClearsResponseCache;

    protected $fillable = [
        'published',
        'name',
        'post',
        'work_id',
        'text',
        'position',
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


    public function work(): BelongsTo
    {
        return $this->belongsTo(Work::class);
    }
}
