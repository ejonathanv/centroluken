<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Opinion extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'title_en',
        'body',
        'body_en',
        'slug',
        'cover',
        'url',
        'author',
        'date_published',
        'on_homepage',
        'position',
    ];

    protected $casts = [
        'date_published' => 'date',
        'on_homepage' => 'boolean',
        'position' => 'integer',
    ];

    public static function distinctAuthors(): Collection
    {
        return static::query()
            ->whereNotNull('author')
            ->where('author', '!=', '')
            ->distinct()
            ->orderBy('author')
            ->pluck('author');
    }
}
