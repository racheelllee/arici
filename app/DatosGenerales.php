<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosGenerales extends Model
{
     protected $table = 'datos_generales';

     /*cada dato general tienen muchos footers*/
    public function linksDatosGenerales()
    {
        return $this->hasMany('App\LinksDatosGenerales');
    }
}
