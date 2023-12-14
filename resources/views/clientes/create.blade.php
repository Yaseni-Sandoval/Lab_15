<!DOCTYPE html>
<html>
<head>
    <title>Perfil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f7fafc;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            color: #013596;
            font-size: 24px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #666d7a;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #cbd5e0;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #2bb09e;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #6fc3ce;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-2xl font-bold mb-6">Agregar perfil</h1>
        <form action="{{ route('clientes.store') }}" method="POST">
            @csrf
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required class="mb-3"><br>
            <label for="apellidoPaterno">Apellido Paterno:</label>
            <input type="text" name="apellidoPaterno" required class="mb-3"><br>
            <label for="apellidoMaterno">Apellido Materno:</label>
            <input type="text" name="apellidoMaterno" required class="mb-3" ><br>
            <label for="fechanacimiento">Fecha de Nacimiento:</label>
            <input type="date" name="fechanacimiento" required class="mb-3"><br>
            <button type="submit">Crear perfil</button>
        </form>
    </div>
</body>
</html>
