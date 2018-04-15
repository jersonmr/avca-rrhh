<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    public function vacantes()
    {
        return $this->hasMany(Vacante::class);
    }
}
