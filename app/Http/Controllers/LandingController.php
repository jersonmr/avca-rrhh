<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingController extends Controller
{
    public function opportunities($cargo)
    {
        $vacantes = DB::table('cargos')
            ->join('vacantes', 'cargos.cargo_id', '=', 'vacantes.cargo_id')
            ->join('sucursales', 'sucursales.sucursal_id', '=', 'vacantes.sucursal_id')
            ->where([
                ['cargos.grupo', '=', $cargo],
                ['vacantes.estatus', '=', 'activa']
            ])
            ->select('cargos.*', 'vacantes.*', 'sucursales.*')
            ->get();

        return view('job', [
            'area' => 'area administrativa',
            'vacantes' => $vacantes
        ]);
    }

    public function verPerfil($vacante_id, $cargo_id)
    {
        $cargo = Cargo::findOrFail($cargo_id);

        return view('partials.landing.cargos.perfil', compact('cargo', 'vacante_id'));
    }

    public function subcargo()
    {
        return view('subjob');
    }
}
