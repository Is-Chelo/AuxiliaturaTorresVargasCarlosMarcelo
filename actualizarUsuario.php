<?php
session_start();
include('conexion.php');
$op = $_GET['op'];
$correo = $_SESSION['correo'];
if($op==1){
    $sql = "UPDATE usuarios set nivel = 0  WHERE correo = '$correo' ";
}else{
    $sql = "UPDATE usuarios set nivel = 1 WHERE correo = '$correo'";
}

$resultado=$con->query($sql);
?>