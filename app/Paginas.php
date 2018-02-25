<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paginas extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'paginas';

    /**
     * Cada pagina tiene imagenes.
     */
    public function imagenesPaginas()
    {
        return $this->hasMany('App\ImagenesPaginas');
    }
}
