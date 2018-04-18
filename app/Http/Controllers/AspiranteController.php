<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAspirante;
use App\Models\Aspirante;
use Illuminate\Http\Request;

class AspiranteController extends Controller
{
    public function store(StoreAspirante $request)
    {
        $aspirante = new Aspirante($request->all());

        $aspirante->save();

        return response()->json(['message' => 'Su solicitud ha sido recibida.'], 201);
    }
}
