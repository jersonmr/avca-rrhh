<?php

namespace App\Http\Controllers;

use App\Models\Sucursal;
use App\Models\Vacante;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VacanteController extends Controller
{
    public function create()
    {
        return view('admin.gerente.vacante.create');
    }

    public function store(Request $request)
    {
        $vacante = new Vacante();
        $vacante->fecha_publicacion = Carbon::now();
        $vacante->sucursal_id = $request->sucursal;
        $vacante->cargo_id = $request->cargo;

        $vacante->save();

        return response()->json(['message' => 'Vacante publicada exitosamente!']);
    }
}
