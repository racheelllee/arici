<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagenesPaginas extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'imagenes_paginas';

    /**
     * Cada pagina tiene imagenes.
     */
    public function paginas()
    {
        return $this->belongsTo('App\Paginas');
    }
}
