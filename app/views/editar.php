<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Tarea</title>
</head>
<body>
    <h1>Editar Tarea</h1>
    <form action="/nuevamvc/tareas/actualizar" method="POST">
        <input type="hidden" name="id" value="<?php echo $data['tarea']->id; ?>">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" value="<?php echo $data['tarea']->titulo; ?>" required>
        <button type="submit">Actualizar Tarea</button>
    </form>
    <br>
    <a href="/tareas">Volver a la lista de tareas</a>
</body>
</html>
