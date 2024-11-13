<?php
include "Model/connection.php";
$id = $_GET["id"];
$sql = $connection->query("SELECT * FROM tb_persona Where id =$id");

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/23a6109ad0.js" crossorigin="anonymous"></script>

</head>

<body>
    <form  class="col-4 p-3 m-auto" method="POST">
        <h3 class=" text-secondary">Modificar Personal</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
        <?php
        include "Controller/update.php";
        ?>

        <?php
        while ($datos = $sql->fetch_object()) { ?>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre ?>">
            </div>
            <div class="mb-3">

                <label for="exampleInputEmail1" class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="apellidos" value="<?= $datos->apellidos ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Documento</label>
                <input type="number" class="form-control" name="documento" value="<?= $datos->documento ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
                <input type="Date" class="form-control" name="fecha_nac" value="<?= $datos->fecha_nac ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="email" class="form-control" name="correo" value="<?= $datos->correo ?>">
            </div>


        <?php  }

        ?>

        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar</button>
    </form>

</body>

</html>