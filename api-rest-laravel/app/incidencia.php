<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class incidencia extends Model
{
    protected $table = 'incidencias';

     //Relación con tabla de usuarios(reportadores)
     public function reportador(){
        return $this->belongsTo('App\User');
    }
}
