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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            //-------------Relacion------------------
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            ->references('id')->on('users');
            //---------------------------------------
            $table->string('nombre');
            $table->integer('edad');
            $table->string('tiempo_edad')->nullable();
            $table->integer('peso_kg')->nullable();
            $table->string('raza');
            $table->string('genero');
            $table->string('especie');
            $table->string('estado');
            $table->string('descripcion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
