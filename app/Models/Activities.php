<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
    use HasFactory;

    // Relacion Uno a Muchos
    public function users()
    {
      return $this->belongsTo('App\Models\User');
    }

    // Relacion Uno a Muchos
    public function patients()
    {
      return $this->belongsTo('App\Models\Patients');
    }

}
