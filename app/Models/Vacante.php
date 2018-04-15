<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacante extends Model
{
    protected $table = 'vacantes';

    protected $fillable = ['sucursal_id', 'cargo_id'];

    public function cargo()
    {
        return $this->belongsTo(Cargo::class);
    }

    public function sucursal()
    {
        return $this->belongsTo(Sucursal::class);
    }
}
