<?php

namespace App\Http\Controllers;

use App\Models\Vendedor;
use Illuminate\Http\Request;

class VendedorController extends Controller
{
    public function index()
    {
        return Vendedor::all();
    }

    public function show($id)
    {
        return Vendedor::findOrFail($id);
    }

    public function store(Request $request)
    {

        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'dni' => 'required|integer|unique:vendedors',
        ]);

        $vendedor = Vendedor::create($request->all());

        return $vendedor;
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'string|max:255',
            'apellido' => 'string|max:255',
            'dni' => 'integer',
        ]);

        $vendedor = Vendedor::findOrFail($id);
        $vendedor = $vendedor->update($request->all());

        return $vendedor;
    }

    public function destroy($id)
    {
        $vendedor = Vendedor::findOrFail($id);
        $vendedor->delete();

        return $vendedor;
    }
}
