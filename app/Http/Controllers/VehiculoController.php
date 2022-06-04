<?php

namespace App\Http\Controllers;

use App\Models\Vehiculos;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    public function index()
    {
        return Vehiculos::all();
    }

    public function show($id)
    {
        return Vehiculos::findOrFail($id);
    }

    public function store(Request $request)
    {

        $request->validate([
            'marca' => 'required|string|max:255',
            'valor' => 'required|double',
            'modelo' => 'required|string|max:255',
            'year' => 'required|integer',

        ]);

        $vehiculo = Vehiculos::create($request->all());

        return $vehiculo;
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'marca' => 'string|max:255',
            'valor' => 'double',
            'modelo' => 'string|max:255',
            'year' => 'integer',
        ]);

        $vehiculo = Vehiculos::findOrFail($id);
        $vehiculo = $vehiculo->update($request->all());

        return $vehiculo;
    }

    public function destroy($id)
    {
        $vehiculo = Vehiculos::findOrFail($id);
        $vehiculo->delete();

        return $vehiculo;
    }
}
