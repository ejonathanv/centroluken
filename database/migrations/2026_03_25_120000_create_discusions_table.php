<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('discusions', function (Blueprint $table) {
            $table->id();
            $table->string('foto_portada')->nullable();
            $table->string('titulo');
            $table->string('slug')->unique();
            $table->date('fecha');
            $table->longText('descripcion')->nullable();
            $table->longText('resumen')->nullable();
            $table->string('pdf_path')->nullable();
            $table->boolean('mostrar_solo_pdf')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('discusions');
    }
};
