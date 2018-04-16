<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\TabuladorSalarial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CargoController extends Controller
{
    public function list()
    {
//        $cargos = Cargo::all();
        $cargos = DB::table('cargos')
            ->join('tabuladores_salariales', 'cargos.tabulador_salarial_id', '=', 'tabuladores_salariales.id')
            ->select('tabuladores_salariales.*', 'cargos.*')
            ->get();
        return view('admin.gerente.cargo.list', compact('cargos'));
    }

    public function edit($id)
    {
        $cargo = Cargo::findOrFail($id);

        //$tabulador_salarial = TabuladorSalarial::where('id', '=', $cargo->tabulador_salarial_id)->get();
        //$list_tabulador = $tabulador_salarial->pluck('sueldo_base', 'id');

        return view('admin.gerente.cargo.edit', compact('cargo'));
    }
    public function update(Request $request, $id)
    {
        $cargo = Cargo::findOrFail($id);
        $cargo->titulo = $request->titulo;
        $cargo->perfil = $request->perfil;
        $cargo->save();

        return redirect()->route('cargo.list');
    }
}
