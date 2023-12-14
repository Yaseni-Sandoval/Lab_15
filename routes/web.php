<?php 

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MembresiaController;
use App\Http\Controllers\RentaController; 
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PeliculaController;


Route::get('/', function () {
    return view('auth.login');  
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::resource('membresias', MembresiaController::class)->only([
        'edit','update' 
    ]);

    Route::resource('rentas', RentaController::class)->only([
        'create', 'edit','destroy','store','update'
    ]);

    Route::resource('clientes', ClienteController::class)->only([
        'show', 'create','store'
    ]);
});

Route::resource('peliculas', PeliculaController::class)->except(['edit']); 
Route::get('/peliculas/{pelicula}/edit', [PeliculaController::class, 'edit'])->name('peliculas.edit');
Route::get('/rentas/create/{nombre_pelicula}', [RentaController::class, 'create'])->name('rentas.create');



