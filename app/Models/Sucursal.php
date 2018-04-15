<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $table = 'sucursales';

    public function vacantes()
    {
        return $this->hasMany(Vacante::class);
    }
}
