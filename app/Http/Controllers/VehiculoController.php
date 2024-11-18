<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indx()
    {
        //
        return Vehiculo::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function stor(Request $request)
    {
        //
        $vehiculo = new Vehiculo();
        $vehiculo->marca = $request->marca;
        $vehiculo->modelo = $request->modelo;
        $vehiculo->categoria = $request->categoria;
        $vehiculo->save();
    }

    /**
     * Display the specified resource.
     */
    public function shower(string $id)
    {

        //
        return Vehiculo::FindOrFail($id);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editt(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatet(Request $request, string $id)
    {
        //
        $vehiculo = Vehiculo::FindOrFail($id);
        $vehiculo->marca = $request->marca;
        $vehiculo->modelo = $request->modelo;
        $vehiculo->categoria = $request->categoria;
        $vehiculo->save();
        return response()->json($vehiculo);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyi(string $id)
    {
        //
        $vehiculo = Vehiculo::FindOrFail($id);
        $vehiculo->delete();
        return response()->json(null, 204);
    }
}
