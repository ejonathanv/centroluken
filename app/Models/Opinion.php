<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
