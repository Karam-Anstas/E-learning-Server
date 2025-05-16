<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Video extends Model
{
    protected $fillable = ["title", "video_url", "section_id"];

    public function section(): BelongsTo
    {
        return $this->belongsTo(Section::class);
    }
}
