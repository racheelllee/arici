<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PdfProductos extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pdf_productos';

    /**
     * Cada producto tiene imagenes.
     */
    public function productos()
    {
        return $this->belongsTo('App\Productos');
    }
}
