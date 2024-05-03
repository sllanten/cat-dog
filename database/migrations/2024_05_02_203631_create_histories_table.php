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
        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            //-------------Relacion------------------
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')
            ->references('id')->on('patients');
            //---------------------------------------            
            $table->date('fecha');
            $table->string('motivos');
            $table->string('piel_anexos');
            $table->string('apareto_respiratorio');
            $table->string('aparato_reproductor');
            $table->string('mucosa');
            $table->string('plan_sanitario');
            $table->string('aparato_neurologico');
            $table->string('organos_setidos');
            $table->string('signos_clinicos');
            $table->string('examen_muscuesqueletico');
            $table->string('aparato_cardiovascular');
            $table->string('aparto_digestivo');
            $table->string('frecuencia_cardiaca');
            $table->string('frecuencia_respiratoria');
            $table->string('pulso');
            $table->string('temperatura_rectal');
            $table->string('phc');
            $table->string('caprologia');
            $table->string('citologia');
            $table->string('quimicas_serica');
            $table->string('imagenologia');
            $table->string('rspaje_koh');
            $table->string('uroanalisis');
            $table->string('patologias');
            $table->string('test_diagnostico');
            $table->string('d_diferencial');
            $table->string('d_definitivo');
            $table->string('tratamiento');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('histories');
    }
};
