<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $dates = ['published_at'];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function getDateAttribute(){
        return \Carbon\Carbon::parse($this->published_at)->format('d M, Y');
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function getCategoryNameAttribute(){
        return $this->category->name;
    }
}
