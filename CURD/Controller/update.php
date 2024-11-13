<?php
include "Model/connection.php";


if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) && !empty($_POST["apellidos"]) && !empty($_POST["documento"]) && !empty($_POST["fecha_nac"]) && !empty($_POST["correo"])) {
        
        // Asignación de variables
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        $documento = $_POST["documento"];
        $fecha = $_POST["fecha_nac"];
        $correo = $_POST["correo"];

        // Consulta de inserción
        $sql = $connection->query("UPDATE tb_persona set nombre='$nombre', apellidos='$apellidos', documento='$documento',
                                        fecha_nac='$fecha', correo='$correo' where id=$id");
        
        if ($sql==1) {
            header("location:index.php");
        } else {
            echo '<div class="alert alert-danger">Error al registrar persona</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Uno o más campos están vacíos</div>';
    }
}
?>
