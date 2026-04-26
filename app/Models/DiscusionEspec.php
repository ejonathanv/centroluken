<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DiscusionEspec extends Model
{
    protected $table = 'discusion_especs';

    protected $fillable = [
        'discusion_id',
        'titulo',
        'titulo_en',
        'descripcion',
        'descripcion_en',
        'orden',
    ];

    protected $casts = [
        'orden' => 'integer',
    ];

    public function discusion(): BelongsTo
    {
        return $this->belongsTo(Discusion::class);
    }
}
