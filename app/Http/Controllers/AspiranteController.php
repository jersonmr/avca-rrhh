<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAspirante;
use App\Models\Aspirante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AspiranteController extends Controller
{
    /**
     * @param StoreAspirante $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreAspirante $request)
    {
        $aspirante = new Aspirante($request->all());

        $aspirante->curriculum = $request->file('curriculum')->getClientOriginalName();
        if ($aspirante->save()) {
            // Almaceno el pdf subido
            if ($request->hasFile('curriculum')) {
                Storage::put('aspirantes', $request->curriculum);
            }
        }

        return response()->json(['message' => 'Su solicitud ha sido recibida.'], 201);
    }
}
