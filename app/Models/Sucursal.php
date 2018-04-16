<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $table = 'sucursales';
    protected $primaryKey = 'sucursal_id';

    public function vacantes()
    {
        return $this->hasMany(Vacante::class);
    }
}
