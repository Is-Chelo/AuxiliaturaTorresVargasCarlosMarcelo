<?php
    include 'conexion.php';
    $imagen = $_POST['imagen'];
    $titulo =sha1( $_POST['titulo']);
    $texto = $_POST['texto'];
    $fecha = $_POST['fecha'];
    $sql = "INSERT into noticias (imagen, titulo, texto, fecha) values ('$imagen', '$titulo', '$texto', '$fecha')";
    $resultado=$con->query($sql);
    if ($resultado){
        echo'Se registro con exito';
        header("Location:listarnoticias.php");
    }else
	    echo "hubo un error";
?>