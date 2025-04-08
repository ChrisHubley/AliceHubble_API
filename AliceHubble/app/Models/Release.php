<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Release extends Model
{
    public function article(): HasMany
    {
        return $this->hasMany(Article::class);
    }
    public function video(): HasMany
    {
        return $this->hasMany(Video::class);
    }
    /** @use HasFactory<\Database\Factories\ReleaseFactory> */
    use HasFactory;
}
