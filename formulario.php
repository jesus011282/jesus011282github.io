<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inscripción de Alumnos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            width: 300px;
            margin: 0 auto;
        }
        label {
            font-size: 14px;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            font-size: 14px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .mensaje {
            text-align: center;
            padding: 10px;
            margin-bottom: 20px;
        }
        .error {
            color: red;
        }
        .exito {
            color: green;
        }
    </style>
</head>
<body>

    <h2 style="text-align: center;">Formulario de Inscripción de Alumnos</h2>

    <!-- Mostrar mensaje de éxito o error -->
    <?php if ($mensaje != ""): ?>
        <div class="mensaje <?php echo (strpos($mensaje, 'correctamente') !== false) ? 'exito' : 'error'; ?>">
            <?php echo $mensaje; ?>
        </div>
    <?php endif; ?>

    <!-- Formulario de inserción de datos -->
    <form method="POST" action="">
        <label for="Id_alumno">Id_alumno:</label>
        <input type="text" id="alumno" name="Id_alumno" required>

        <label for="Nombre_completo">Nombre_completo:</label>
        <input type="text" id="Nombre_completo" name="Nombre_completo" required>

        <label for="Edad">Edad:</label>
        <input type="text" id="Edad" name="Edad" required>

        <label for="Nombre_carrera">Nombre_carrera:</label>
        <input type="text" id="Nombre_carrera" name="Nombre_carrera" required>

        <input type="submit" value="Registrar Alumno">
    </form>

</body>
</html>
