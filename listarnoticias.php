<?php
include 'conexion.php';
$sql = "SELECT noticias.id, imagen, titulo, texto,fecha from noticias ";
$resultado = $con->query($sql);
?>
<div class="container my-5">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">imagen</th>
      <th scope="col">Titulo</th>
      <th scope="col">Texto</th>
      <th scope="col">Fecha</th>
      <th scope="col">Comentarios</th>
    </tr>
  </thead>
  <tbody>
  <?php
    while ($fila  = $resultado->fetch_assoc()) {
        $sql2 = "SELECT comentario FROM comentarios WHERE idnoticia=".$fila['id'];
         
        $resultadoC = $con->query($sql2);

        echo'
        <tr>
            <td><img src="images/'.$fila['imagen'].'" width="60px"></td>
            <td>'.$fila['titulo'].'</td>
            <td>'.substr("$fila[texto]",0, 40).'</td>
            <td>'.$fila['fecha'].'</td>
                <td>';
                    while($com = $resultadoC->fetch_assoc()){
                    echo '<li>'.$com['comentario'].'</li>';
                }
        echo '
            <button class="btn btn-secondary" onclick="insertarComentario('.$fila['id'].')">Insertar</button>
            </td>
        </tr>';
    }
    ?>
  </tbody>
</table>
</div>


