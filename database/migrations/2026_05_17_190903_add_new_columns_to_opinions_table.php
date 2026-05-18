<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('opinions', function (Blueprint $table) {
            $table->string('author')->nullable();
            $table->date('date_published')->nullable();
            $table->boolean('on_homepage')->default(false);
            $table->integer('position')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('opinions', function (Blueprint $table) {
            $table->dropColumn('author');
            $table->dropColumn('date_published');
            $table->dropColumn('on_homepage');
            $table->dropColumn('position');
        });
    }
};
