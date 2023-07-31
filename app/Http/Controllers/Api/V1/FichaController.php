<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Codigo_referencia;
use App\Models\Ficha;
use Illuminate\Http\Request;

class FichaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ficha = new Ficha;
        $ficha->tipo_ficha = $request->tipo_ficha;
        $ficha->cuc = $request->cuc;
        $ficha->codigo_hoja = $request->codigo_hoja;
        $ficha->save();

        $ficha_id = $ficha->id;

        $referencias = new Codigo_referencia;
        $referencias->ficha_id = $ficha_id;
        $referencias->dpto = $request->dpto;
        $referencias->prov = $request->prov;
        $referencias->dist = $request->dist;
        $referencias->sector = $request->sector;
        $referencias->manzana = $request->manzana;
        $referencias->lote = $request->lote;
        $referencias->edifica = $request->edifica;
        $referencias->piso = $request->piso;
        $referencias->unidad = $request->unidad;
        $referencias->dc = $request->dc;
        $referencias->save();

        return response()->json($referencias);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ficha $ficha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ficha $ficha)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ficha $ficha)
    {
        //
    }
}
