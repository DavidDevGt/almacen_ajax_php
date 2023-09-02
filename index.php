<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almacen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h3 class="mt-3 text-center">Empleados</h3>

        <form class="mb-3 mt-2" action="" method="post">
            <label class="form-label" for="campo">Buscar: </label>
            <input class="form-control" type="text" name="campo" id="campo">
        </form>

        <p></p>

        <table class="table table-hover table-success table-striped">
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