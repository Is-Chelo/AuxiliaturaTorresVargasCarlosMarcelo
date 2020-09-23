<?php
    include "conexion.php";
    $id = $_POST['id'];
    $comentario = $_POST['comentario'];
    $sql = "INSERT into comentarios (idnoticia, comentario) values ('$id', '$comentario')";
    $resultado=$con->query($sql);
?>