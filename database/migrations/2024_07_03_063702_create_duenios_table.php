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
        Schema::create('duenios', function (Blueprint $table) {
            $table->id('idDuenios');
            $table->string('nombre');
            $table->string('aprellido');
            $table->string('correo');
            $table->string('telefono');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('duenios');
    }
};