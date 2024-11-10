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
        Schema::create('reportes', function (Blueprint $table) {
            $table->id('ID_Reportes');
            $table->text('Contenido');
            $table->binary('Imagen');
            $table->decimal('Latitud', 9,6);
            $table->decimal('Longitud', 9,6);
            $table->string('TipoReporte');
            $table->unsignedBigInteger('id');
            $table->timestamps();
            $table->foreign('id')-> references('id')->on ('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reportes');
    }
};
