<?php
    include "conexion.php";
    $id = $_POST['id'];
    $sql = "SELECT * from noticias where id = '$id'";
    $resultado = $con->query($sql);
?>
<div class="container my-5">
    <?php
    while($fila  = $resultado->fetch_assoc()){
        echo'<p>noticia : '.$fila['titulo'].'</p>';
        echo'<p> texto : '.$fila['texto'].'</p>';
    }
    ?>
    <form>
        <div class="form-group">
            <input type="hidden" id="idnoticia" value="<?php echo $id; ?>">
            <label for="num">comentario</label>
            <input type="text" class="form-control" id="comentario">
        </div>
        <button type="button" class="btn btn-primary" onclick="RegistrarComentario('')">Insertar</button>
    </form>
</div>
