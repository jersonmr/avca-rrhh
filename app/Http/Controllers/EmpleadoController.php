<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesion;

class EmpleadoController extends Controller
{
    public function obtenerProfesiones(Request $request)
    {        
        $data = Profesion::where('nivel_academico', $request->nivel_academico)->get();
        return response()->json($data);
    }
}
