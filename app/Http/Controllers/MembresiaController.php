<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use App\Models\Membresia;
use Illuminate\Http\Request;

class MembresiaController extends Controller
{
    public function index()
    {
        $membresias = Membresia::all();
        return view('membresias.index', compact('membresias'));
    }

    public function create()
    {
        return view('membresias.create');
    }

    public function store(Request $request)
    {
        $membresia = Membresia::create($request->all());
        return redirect()->route('membresias.show', ['membresia' => $membresia->id]);
    }

    public function show($id)
    {
        $cliente = Cliente::with('membresia')->findOrFail($id);
    
        return view('clientes.show', ['cliente' => $cliente]);
    }
    
    public function edit(Membresia $membresia)
    {
        return view('membresias.edit', compact('membresia'));
    }

    public function update(Request $request, Membresia $membresia)
    {
        $membresia->update($request->all());

        $cliente = Cliente::where('idmembresia', $membresia->id)->first();

        return redirect()->route('clientes.show', $cliente->id);
    }

    public function destroy(Membresia $membresia)
    {
        $membresia->delete();
        return redirect()->route('membresias.index');
    }
}