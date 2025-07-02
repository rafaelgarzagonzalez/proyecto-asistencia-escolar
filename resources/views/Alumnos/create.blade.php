<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Nuevo Alumno</title>
    <!-- Opcional: Añadiremos estilos más adelante para que se vea bonito -->
    <style>
        body { font-family: sans-serif; margin: 40px; }
        form { max-width: 500px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 10px; }
        label { display: block; margin-bottom: 5px; }
        input, button { width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 5px; border: 1px solid #ccc; }
        button { background-color: #007bff; color: white; border: none; cursor: pointer; }
    </style>
</head>
<body>

    <h1>Formulario de Alta de Alumno</h1>

    <!-- Este formulario enviará los datos al método 'store' de nuestro AlumnoController -->
    <form action="{{ route('alumnos.store') }}" method="POST">
        
        <!-- @csrf es una medida de seguridad OBLIGATORIA en Laravel. Sin esto, el formulario no funcionará. -->
        @csrf

        <div>
            <label for="nombre_completo">Nombre Completo:</label>
            <input type="text" id="nombre_completo" name="nombre_completo" required>
        </div>

        <div>
            <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>
        </div>

        <div>
            <label for="curp">CURP:</label>
            <input type="text" id="curp" name="curp" required>
        </div>

        <div>
            <label for="salon_asignado">Salón Asignado:</label>
            <input type="text" id="salon_asignado" name="salon_asignado" required>
        </div>

        <button type="submit">Registrar Alumno</button>

    </form>

</body>
</html>