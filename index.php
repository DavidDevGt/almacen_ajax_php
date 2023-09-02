<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almacén</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        /* Estilos personalizados */
        body {
            background-color: #f5f5f5;
        }

        .container {
            background-color: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        table {
            font-size: 0.9rem;
        }

        th, td {
            vertical-align: middle !important;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h3 class="mb-4 text-center">Empleados</h3>

        <form class="mb-4" action="" method="post">
            <div class="mb-3">
                <label class="form-label" for="campo">Buscar:</label>
                <input class="form-control" type="text" name="campo" id="campo" placeholder="Escribe el nombre del empleado...">
            </div>
        </form>

        <p class="mb-3"></p>

        <table class="table table-hover table-success table-striped">
            <thead>
                <tr>
                    <th>Num empleado</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Fecha nacimiento</th>
                    <th>Fecha ingreso</th>
                    <th class="text-center">Editar</th>
                    <th class="text-center">Eliminar</th>
                </tr>
            </thead>
            <tbody id="content">
            </tbody>
        </table>
    </div>

    <script>
        getData()

        document.getElementById("campo").addEventListener("keyup", getData)

        function getData(){
            let input = document.getElementById("campo").value
            let content = document.getElementById("content")
            let url = "load.php"
            let formData = new FormData()
            formData.append('campo', input)

            fetch(url, {
                method: "POST",
                body: formData
            }).then(response => response.json())
            .then(data => {
                content.innerHTML = data
            }).catch(err => console.log(err))
        }
    </script>
</body>
</html>
