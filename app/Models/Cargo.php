<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $primaryKey = 'cargo_id';
    protected $fillable = ['titulo', 'grupo', 'perfil', 'tabulador_salarial_id'];

    public function vacantes()
    {
        return $this->hasMany(Vacante::class);
    }

    public function tabulador()
    {
        return $this->hasOne(TabuladorSalarial::class);
    }
}
