<?php
    session_start();
    include('conexion.php');
    if(isset($_SESSION['usuario'])){
        $sql = "SELECT * from usuarios";
        $resultado = $con->query($sql);
        
    ?>
<table border="1">
    <tr>
        <th>Correo</th>
        <th>Nombre Completo</th>
        <th>Nivel</th>
        <th>Operaciones</th>
    </tr>
    <?php
    if($_SESSION['nivel']==1){
        while ($fila  = $resultado->fetch_object()) {
            $nivel = $fila->nivel?"admin":"usuario";
            $operaciones = $fila->nivel?"<button> Cambiar a Usuario</button>":"<button> Cambiar a Admin</button>";
            echo'
            <tr>
                <td>'.$fila->correo.'</td>
                <td>'.$fila->nombrecompleto. '</td>
                <td>'. $nivel .'</td>
                <td></td>
            </tr>';
        }
    }else{
        while ($fila  = $resultado->fetch_object()) {
            $nivel = $fila->nivel?"admin":"usuario";
            $operaciones = $fila->nivel?'<button class="btn btn-danger" onclick="cambiar('.$fila->correo.')">Cambiar Admin</button>':'<button class="btn btn-success" onclick="cambiar('.$fila->correo.')" >Cambiar Usuario</button>';
            echo'
            <tr>
                <td>'.$fila->correo.'</td>
                <td>'.$fila->nombrecompleto. '</td>
                <td>'. $nivel .'</td>
                <td>'.$operaciones.'</td>
            </tr>';
        }
    }
    
    ?>
    
</table>

<?php
    }else{

        echo  "no se logueo";  
    }
?>