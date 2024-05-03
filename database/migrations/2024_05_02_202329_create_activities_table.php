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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            //-------------Relacion------------------
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
            ->references('id')->on('users');
            //---------------------------------------}
            //-------------Relacion------------------
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')
            ->references('id')->on('patients');
            //---------------------------------------
            $table->integer('tipo_actividad');
            $table->date('fecha');
            $table->string('descripcion');
            $table->string('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
