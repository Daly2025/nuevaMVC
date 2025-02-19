<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Nueva Tarea</title>
</head>
<body>
    <h1>Crear Nueva Tarea</h1>
    <form action="/nuevamvc/tareas/crear" method="POST">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" required>
        <button type="submit">Crear Tarea</button>
    </form>
    <br>
    <a href="/tareas">Volver a la lista de tareas</a>
</body>
</html>
