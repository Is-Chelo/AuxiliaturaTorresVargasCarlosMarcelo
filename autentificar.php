<?php
    include 'conexion.php';

    session_start();

    $correo = $_POST['correo'];
    $password = sha1($_POST['password']);

    $sql = "SELECT * from usuarios where correo = '$correo' and password = '$password'";

    $resultado=$con->query($sql);

    if ($fila=$resultado->fetch_assoc()){
        $_SESSION['usuario'] = $fila['nombrecompleto'];
        $_SESSION['correo'] = $fila['correo'];
        $_SESSION['nivel'] = $fila['nivel'];
        echo'Se logueo con exito';
    }else{
       echo "Usuario no autorizado"; 
    }
?>
