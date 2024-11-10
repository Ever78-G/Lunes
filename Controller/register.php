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
        $sql = $connection->query("INSERT INTO tb_persona (nombre, apellidos, documento, fecha_nac, correo) VALUES ('$nombre', '$apellidos', '$documento', '$fecha', '$correo')");
        
        if ($sql==1) {
            echo '<div class="alert alert-success">Persona registrada correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar persona</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Uno o más campos están vacíos</div>';
    }
}
?>
