<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table = 'productos';

    /**
     * Cada producto tiene imagenes.
     */
    public function imagenesProductos()
    {
        return $this->hasMany('App\ImagenesProductos');
    }

    /**
     * Cada producto tiene pdf.
     */
    public function pdfProductos()
    {
        return $this->hasMany('App\PdfProductos');
    }

     /**
     * Cada producto tiene una categoria.
     */
    public function categorias()
    {
        return $this->belongsTo('App\Categorias');
    }
}
