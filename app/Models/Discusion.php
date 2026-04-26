<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Discusion extends Model
{
    protected $fillable = [
        'foto_portada',
        'titulo',
        'titulo_en',
        'slug',
        'fecha',
        'descripcion',
        'descripcion_en',
        'resumen',
        'resumen_en',
        'pdf_path',
        'mostrar_solo_pdf',
    ];

    protected $casts = [
        'fecha' => 'date',
        'mostrar_solo_pdf' => 'boolean',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function especificaciones(): HasMany
    {
        return $this->hasMany(DiscusionEspec::class)->orderBy('orden');
    }
}
