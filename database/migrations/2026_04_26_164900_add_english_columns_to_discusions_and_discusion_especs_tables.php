<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('discusions', function (Blueprint $table) {
            $table->string('titulo_en')->after('titulo')->nullable();
            $table->longText('descripcion_en')->after('descripcion')->nullable();
            $table->longText('resumen_en')->after('resumen')->nullable();
        });

        Schema::table('discusion_especs', function (Blueprint $table) {
            $table->string('titulo_en')->after('titulo')->nullable();
            $table->longText('descripcion_en')->after('descripcion')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('discusions', function (Blueprint $table) {
            $table->dropColumn(['titulo_en', 'descripcion_en', 'resumen_en']);
        });

        Schema::table('discusion_especs', function (Blueprint $table) {
            $table->dropColumn(['titulo_en', 'descripcion_en']);
        });
    }
};
