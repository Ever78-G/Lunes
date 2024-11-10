<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD y MYSQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/23a6109ad0.js" crossorigin="anonymous"></script>
</head>

<body>
    <h1 class="text-center p-3">Panel de Control</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <div class="container-fluid row">
        <form>
            <h3 class=" text-secondary">Resgistar Personal</h3>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre">

                <label for="exampleInputEmail1" class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="apellidos">

                <label for="exampleInputEmail1" class="form-label">Documento</label>
                <input type="number" class="form-control" name="documento">

                <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
                <input type="Date" class="form-control" name="fecha_nac">

                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="email" class="form-control" name="correo">
            </div>

            <button type="submit" class="btn btn-primary" name="btnregistro" value="ok">Registar</button>
        </form>
        <div class="col-8 p-4"></div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Documento</th>
                        <th scope="col">Fecha Nacimiento</th>
                        <th scope="col">Correo</th>
                        <th scope="col"></th>


                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "Model/connection.php";
                    $sql = $connection->query("SELECT * FROM tb_persona");
                    while ($dato=$sql->fetch_object()){
                        ?>
                    
                    <tr>
                        <td><?= $dato->id ?></td>
                        <td><?= $dato->nombre ?></td>
                        <td><?= $dato->apellidos ?></td>
                        <td><?= $dato->documento ?></td>
                        <td><?= $dato->fecha_nac ?></td>
                        <td><?= $dato->correo ?></td>

                        
                        <td>
                        <a href="" class ="btn btn-small btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
                        <a href="" class ="btn btn-small btn-danger"><i class="fa-solid fa-trash-arrow-up"></i></a>

                        </td>
                    </tr>
                    <?php }

                    ?>

 
                </tbody>
            </table>

    </div>
</body>

</html>