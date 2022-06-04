<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        return Cliente::all();
    }

    public function show($id)
    {
        return Cliente::findOrFail($id);
    }

    public function store(Request $request)
    {

        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'dni' => 'required|integer|unique:clientes',
        ]);

        $cliente = Cliente::create($request->all());

        return $cliente;
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'string|max:255',
            'apellido' => 'string|max:255',
            'dni' => 'integer',
        ]);

        $cliente = Cliente::findOrFail($id);
        $cliente = $cliente->update($request->all());

        return $cliente;
    }

    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        return $cliente;
    }
}
