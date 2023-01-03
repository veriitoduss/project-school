<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;
    public function grade(){
        return $this->hasOne('App\Models\Grade','id','Grado_id');
    }
}
