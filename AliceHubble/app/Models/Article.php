<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    public function section(): BelongsTo
    {
        return $this->belongsTo(Section::class);
    }
    public function release(): BelongsTo
    {
        return $this->belongsTo(Release::class);
    }
    /** @use HasFactory<\Database\Factories\ArticleFactory> */
    use HasFactory;
}
