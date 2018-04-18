<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aspirante extends Model
{
    protected $primaryKey = 'aspirante_id';
    protected $fillable = ['cedula', 'nacionalidad', 'fecha_nacimiento', 'apellido', 'nombre', 'email', 'telefono_movil', 'telefono_fijo', 'curriculum', 'vacante_id'];
}
