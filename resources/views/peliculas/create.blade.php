<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        background: linear-gradient(45deg, #b2b2b2, #c3c0bf);
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .card {
        width: 400px;
        padding: 20px;
        border-radius: 8px;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        text-align: center;
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
    }

    input[type="text"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    button[type="submit"] {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 8px 16px;
        border-radius: 4px;
        text-decoration: none;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Crear Película</div>

                    <div class="card-body">
                        <form action="{{ route('peliculas.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="director">Director</label>
                                <input type="text" name="director" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="genero">Género</label>
                                <input type="text" name="genero" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="artista1">Artista 1</label>
                                <input type="text" name="artista1" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="artista2">Artista 2</label>
                                <input type="text" name="artista2" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <a href="{{ asset('peliculas') }}" class="btn btn-secondary">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
