<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsignacionAG extends Model
{
    use HasFactory;
    public function grade(){
        return $this->hasOne('App\Models\Grade','id','Grado_id');
    }
    public function estudiante(){
        return $this->hasOne('App\Models\Estudiante','id','Estudiante_id');
    }
}
