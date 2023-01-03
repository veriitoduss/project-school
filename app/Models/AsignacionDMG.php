<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsignacionDMG extends Model
{
    use HasFactory;
    public function profesor(){
        return $this->hasOne('App\Models\Profesor','id','Profesor_id');
    }
    public function grade(){
        return $this->hasOne('App\Models\Grade','id','Grado_id');
    }
    public function materia(){
        return $this->hasOne('App\Models\Materia','id','Materia_id');
    }
}
