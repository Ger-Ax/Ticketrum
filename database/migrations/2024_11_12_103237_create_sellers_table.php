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
        Schema::create('sellers', function (Blueprint $table) {
            $table->id();
            $table ->string('nombre')->nullable();
            $table->string('username')->unique()->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('password')->nullable();
            $table->string('foto')->nullable();
            $table->string('direccion')->nullable();
            $table->string('telefono')->nullable();
            $table->timestamp('verificacion_email_alas')->nullable();
            $table->enum('status',['pendiente','EnRevision','activo'])->default('pendiente');
            $table->string('metodo_pago')->nullable();
            $table->string('email_pago')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sellers');
    }
};
