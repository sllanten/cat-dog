<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    use HasFactory;

    // Relacion Uno a Muchos
    public function users()
    {
      return $this->belongsTo('App\Models\User');
    }

    // Relacion Uno a muchos
    public function actividad()
    {
      return $this->hasMany('App\Models\Activities');
    }

    // Relacion Uno a muchos
    public function historial()
    {
      return $this->hasMany('App\Models\Histories');
    }

}
