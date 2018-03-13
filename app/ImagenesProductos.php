<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagenesProductos extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'imagenes_productos';

    /**
     * Cada producto tiene imagenes.
     */
    public function productos()
    {
        return $this->belongsTo('App\Productos');
    }
}
