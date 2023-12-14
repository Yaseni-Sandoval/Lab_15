<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rentar una Película</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #ececbf;
            color: #495057;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 400px;
            text-align: center;
        }

        h1 {
            color: #005ebd;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #014385;
        }

        input, select {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 1px solid #ced4da;
            border-radius: 4px;
            outline: none;
            font-size: 14px;
        }

        button {
            background-color: #54960a;
            color: #ffffff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-right: 10px;
        }

        button:hover {
            background-color: #2ab300;
        }

        .cancel-btn {
            background-color: #475b6d;
            color: #ffffff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .cancel-btn:hover {
            background-color: #495057;
        }
    </style>
</head>
<body>
    <form id="rentaForm" action="{{ route('rentas.store') }}" method="POST">
        @csrf
        <h1>Renta Película</h1>
    
        <label for="fecharegistro">Fecha de Registro:</label>
        <input type="date" name="fecharegistro" required>
    
        <label for="fechaentrega">Fecha de Entrega:</label>
        <input type="date" name="fechaentrega" required>
    
        <label for="fechadevolucion">Fecha de Devolución:</label>
        <input type="date" name="fechadevolucion" required>
    
        <input type="hidden" name="idcliente" value="{{ $clienteActual->id }}">
        {{ $clienteActual->nombre }} {{ $clienteActual->apellidoPaterno }} {{ $clienteActual->apellidoMaterno }}
    
        <label for="idpelicula">Película:</label>
        <input type="text" name="pelicula" value="{{ old('nombre_pelicula', $nombre_pelicula) }}" readonly id="peliculaSeleccionada">
        <div>
            <button type="submit" onclick="mostrarPeliculaSeleccionada()">Rentar pelicula</button>
            <button type="button" class="cancel-btn" onclick="history.back(); return false;">Cancelar</button>
        </div>
    </form>
    
    

</body>
</html>
