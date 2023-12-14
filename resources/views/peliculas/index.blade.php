<style>
     body {
        background: linear-gradient(45deg, #b2b2b2, #c3c0bf);
    }

    .container {
        display: flex;
        bottom: 10rem;
        align-items: center;
        height: 100vh;
    }
    .table {
        width: 100%;
        border-collapse: collapse;
    }

    .table th,
    .table td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .card-header {
        text-align: center;
    }

</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Lista de Películas</div>

                <div class="card-body">
                    <a href="{{ route('peliculas.create') }}" class="btn btn-primary mb-3">Crear Película</a>
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Director</th>
                                <th>Género</th>
                                <th>Artista 1</th>
                                <th>Artista 2</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($peliculas as $pelicula)
                                <tr>
                                    <td>{{ $pelicula->nombre }}</td>
                                    <td>{{ $pelicula->director }}</td>
                                    <td>{{ $pelicula->genero }}</td>
                                    <td>{{ $pelicula->artista1 }}</td>
                                    <td>{{ $pelicula->artista2 }}</td>
                                    <td>
                                        <a href="{{ route('peliculas.edit', $pelicula->id) }}" class="btn btn-primary">Editar</a>
                                        <form action="{{ route('peliculas.destroy', $pelicula->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar esta película?')">Eliminar</button>
                                        </form>
                                        <a href="{{ route('rentas.create', ['nombre_pelicula' => $pelicula->nombre]) }}" class="btn btn-warning">Rentar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{ asset('clientes') }}" class="btn btn-primary mb-3">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
