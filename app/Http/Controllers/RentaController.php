<?php

namespace App\Http\Controllers;
use App\Models\Pelicula;
use App\Models\Renta;
use App\Models\Cliente;
use Illuminate\Http\Request;

class RentaController extends Controller
{
    public function index()
    {
        $rentas = Renta::with('pelicula', 'cliente')->get();

        return view('rentas.index', ['rentas' => $rentas]);
    }

    public function create(Request $request, $nombre_pelicula)  
    {
        $peliculas = Pelicula::all();
    
        $clienteActual = $request->user();
    
        return view('rentas.create', [
             'peliculas' => $peliculas,
             'clienteActual' => $clienteActual, 
             'nombre_pelicula' => $nombre_pelicula 
        ]);
    }

    public function store(Request $request)
    {
        
        $nombrePelicula = $request->input('pelicula'); 
        
        $pelicula = Pelicula::where('nombre', $nombrePelicula)->first();
        
        if($pelicula){
            $idPelicula = $pelicula->id;
        } else {

            return back()->withErrors(['pelicula_no_encontrada' => 'No se encontró una película con el nombre indicado']); 
        }
        $renta = new Renta; 
        $renta->fecharegistro = $request->input('fecharegistro');
        $renta->fechadevolucion = $request->input('fechadevolucion');
        $renta->fechaentrega = $request->input('fechaentrega');
        $renta->idcliente = $request->input('idcliente');

        $renta->idpelicula = $idPelicula;
    
        $renta->save();
    
        return redirect()->route('clientes.show', $renta->idcliente);
    }
    

    public function show($id)
    {

    }
    
    public function edit(Renta $renta)
    {
        return view('rentas.edit', compact('renta'));
    }

    public function update(Request $request, Renta $renta)
    {
        $renta->update($request->all());
        return redirect()->route('clientes.show', $renta->idcliente);
    }

    public function destroy(Renta $renta)
    {
        $renta->delete();
        return redirect()->route('clientes.show', $renta->idcliente);
    }
}
