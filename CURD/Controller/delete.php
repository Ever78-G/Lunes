<?php

if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sql = $connection->query("DELETE FROM tb_persona WHERE id = $id");

    if ($sql==1) {
        echo '<div class="alert alert-success">Eliminado correctamente</div>';
    } else {
        echo '<div class="alert alert-danger">Error al eliminar</div>';
    }
} 
?>
