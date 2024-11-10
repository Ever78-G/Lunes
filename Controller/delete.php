<?php
include "../Model/connection.php"; // Dos puntos para retroceder a la carpeta superior

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Realizar la consulta de eliminación
    $sql = $connection->query("DELETE FROM tb_persona WHERE id = $id");

    if ($sql==1) {
        echo '<div class="alert alert-success">Eliminado correctamente</div>';
    } else {
        echo '<div class="alert alert-danger">Error al eliminar</div>';
    }
} else {
    echo '<div class="alert alert-warning">Error: El ID no fue encontrado</div>';
}
?>
