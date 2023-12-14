<x-app-layout>
    <style>
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            text-align: center;
            background: linear-gradient(rgba(165, 171, 174, 0.5), rgba(223, 196, 196, 0.5)),  no-repeat center center fixed;
            background-size: cover;
        }

        h1, h2, h3 {
            color: rgb(246, 83, 83);
        }

        a {
            color: #86889b;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        button {
            cursor: pointer;
        }

        button:hover {
            background-color: #e53e3e;
        }

        .bg-green {
            background-color: #009dff;
            color: #ffffff;
        }

        .bg-blue {
            background-color: #3182ce;
            color: #ffffff;
            
        }

        .bg-red {
            background-color: rgb(17, 207, 240);
            color: #ffffff;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }

        .details-box {
            background-color: #f0f4f8;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
            text-align: left;
        }

        .details-box h2 {
            color: #0053e2;
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .details-box p {
            color: #4a5568;
            margin-bottom: 5px;
        }

        .button-box {
            margin-top: 15px;
            margin-bottom: 20px;
        }

        .button-box a {
            display: inline-block;
            margin-right: 10px;
        }

        .grid .rental-box {
            margin-bottom: 20px;
        }
    </style>

    <div class="py-8">
    <div class="container mx-auto sm:px-6 lg:px-8">
        <div class="card">
            <div class="details-box">
                <h2>Cliente</h2>
                <p><strong>Nombre:</strong> {{ $cliente->nombre }}</p>
                <p><strong>Apellido Paterno:</strong> {{ $cliente->apellidoPaterno }}</p>
                <p><strong>Apellido Materno:</strong> {{ $cliente->apellidoMaterno }}</p>
                <p><strong>Fecha de Nacimiento:</strong> {{ $cliente->fechanacimiento }}</p>
            </div>

            <div class="details-box">
                <h2>Membresía</h2>
                <p><strong>Fecha de Expedición:</strong> {{ $cliente->membresia->fechaexpedicion }}</p>
                <p><strong>Fecha de Expiración:</strong> {{ $cliente->membresia->fechaexpiracion }}</p>
                @if($cliente->membresia)
                <div class="mt-4">
                    <a href="{{ route('membresias.edit', $cliente->membresia->id) }}" class="bg-green text-white rounded px-4 py-2 hover:bg-green-600 transition" style="text-decoration: none;">Editar</a>
                </div>
                @endif
            </div>
            <h2 style="color: #0053e2; font-weight: bold; font-size: 20px;">Peliculas Rentadas</h2>
            <div class="grid">
                @forelse($cliente->rentas as $renta)
                <div class="bg-gray-100 p-6 rounded shadow rental-box" style="border-radius: 15px; text-align: left;">
                    <h2 class="text-xl font-semibold mb-2">Película</h2>
                    <p>Nombre: {{ $renta->pelicula->nombre }}</p>
                    <p>Director: {{ $renta->pelicula->director }}</p>
                    <p>Género: {{ $renta->pelicula->genero }}</p>
                    <p>Artista 1: {{ $renta->pelicula->artista1 }}</p>
                    <p>Artista 2: {{ $renta->pelicula->artista2 }}</p>
                
                    <h2 class="text-xl font-semibold mb-2 mt-4">Renta</h2>
                    <p>Fecha de Registro: {{ $renta->fecharegistro }}</p>
                    <p>Fecha de Devolución: {{ $renta->fechadevolucion }}</p>
                    <p>Fecha de Entrega: {{ $renta->fechaentrega }}</p>
                        
                    <div class="flex items-center justify-center mt-4 mb-4">
                        <a href="{{ route('rentas.edit', $renta->id) }}" class="bg-blue text-white rounded px-2 py-1 hover:bg-blue-600 transition" style="text-decoration: none;">Editar</a>
                        <form action="{{ route('rentas.destroy', $renta->id) }}" method="POST" class="ml-4">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red text-white rounded px-2 py-1 hover:bg-red-600 transition">Eliminar</button>
                        </form>
                    </div>
                </div>
                @empty
                <p class="text-center py-4 rounded shadow" style="background: #33dfe5; color: #570101;">No hay películas rentadas</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
</x-app-layout>