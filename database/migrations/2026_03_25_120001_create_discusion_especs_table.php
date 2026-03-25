<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('discusion_especs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('discusion_id')->constrained('discusions')->cascadeOnDelete();
            $table->string('titulo');
            $table->longText('descripcion')->nullable();
            $table->unsignedInteger('orden')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('discusion_especs');
    }
};
