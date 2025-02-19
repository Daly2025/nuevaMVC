<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/styles.css">
</head>
<body>
    <h1>hola tareas</h1>
    <a href="/nuevamvc/tareas/nueva">Nueva tarea</a>
    
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data['tareas'] as $tarea): ?>
                <tr>
                    <td><?= $tarea->id ?></td>
                    <td><?= $tarea->titulo ?></td>
                    <td><?= $tarea->estado ?></td>
                    <td>
                        <a href="/nuevamvc/tareas/editar/<?= $tarea->id ?>">Editar</a>
                        <a href="/nuevamvc/tareas/eliminar/<?= $tarea->id ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
</body>
</html>
