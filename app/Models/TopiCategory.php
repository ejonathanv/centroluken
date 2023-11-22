<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopiCategory extends Model
{
    use HasFactory;

    public function topics(){
        return $this->hasMany(Topic::class, 'category_id');
    }
}
