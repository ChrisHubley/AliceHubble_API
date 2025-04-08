<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Video extends Model
{
    public function release(): BelongsTo
    {
        return $this->belongsTo(Release::class);
    }
    /** @use HasFactory<\Database\Factories\VideoFactory> */
    use HasFactory;
}
