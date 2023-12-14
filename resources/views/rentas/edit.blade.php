<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Renta</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #c1cec6;
            color: #b3bec9;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
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
            color: #343a40;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #343a40;
        }

        input {
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
            background-color: #007bff;
            color: #ffffff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-right: 10px;
        }

        .btn-danger{
            background: rgb(58, 145, 148)
        }

        .btn:hover{
            background-color: rgba(255, 0, 0, 0.877)
        }

        button:hover {
            background-color: #6488af;
        }

        a {
            color: #007bff;
            text-decoration: none;
            font-size: 14px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <form action="{{ route('rentas.update', $renta->id) }}" method="POST">
        @csrf
        @method('PUT')
        <h1>Editar Alquiler</h1>

        <label for="fecharegistro">Fecha de Registro:</label>
        <input type="date" name="fecharegistro" value="{{ $renta->fecharegistro }}" required>

        <label for="fechadevolucion">Fecha de Devolución:</label>
        <input type="date" name="fechadevolucion" value="{{ $renta->fechadevolucion }}" required>

        <label for="fechaentrega">Fecha de Entrega:</label>
        <input type="date" name="fechaentrega" value="{{ $renta->fechaentrega }}" required>

        <div>
            <button type="submit">Actualizar</button>
            <button type="button" class="btn btn-danger" onclick="history.back(); return false;">Cancelar</button>
        </div>
    </form>
</body>
</html>
