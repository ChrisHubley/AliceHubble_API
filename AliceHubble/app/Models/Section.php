<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Section extends Model
{
    public function content(): HasMany
    {
        return $this->hasMany(Content::class);
    }
    public function article(): HasMany
    {
        return $this->hasMany(Article::class);
    }
    /** @use HasFactory<\Database\Factories\SectionFactory> */
    use HasFactory;
}
