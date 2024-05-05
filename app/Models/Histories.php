<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Histories extends Model
{
    use HasFactory;

    // Relacion Uno a Muchos
    public function paciente()
    {
      return $this->belongsTo('App\Models\Patients');
    }
    
    // Relacion Uno a Muchos
    public function pacusuario()
    {
      return $this->belongsTo('App\Models\User');
    }
}
