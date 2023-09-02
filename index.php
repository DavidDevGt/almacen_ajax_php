<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almacen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        table, th, td {
            border: 1px solid;
        }

        table {
            width: 80%;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h3>Empleados</h3>

    <form action="" method="post">
        <label for="campo">Buscar: </label>
        <input type="text" name="campo" id="campo">
    </form>

    <p></p>

    <table class="table table-striped">
        <thead>
            <th>Num empleado</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha nacimiento</th>
            <th>Fecha ingreso</th>
            <th></th>
            <th></th>
        </thead>

        <tbody id="content">

        </tbody>
    </table>
</body>
</html>