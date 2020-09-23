<?php
    session_start();
    include 'conexion.php';
            ?>
            <div class="bg">
            <h5>REGISTRAR NOTICIA</h5>
            <strong id="vacio" style="color: red;"></strong><br>
            <form action="" >
                <label for="imagen" >imagen</label>
                <input type="file" id="imagen" name="imagen" ><br>
                <label for="titulo" require>Titulo</label>
                <input type="text" id="titulo" name="titulo"><br>
                <label for="texto" require>Texto</label>
                <input type="text" id="texto" name="texto"><br>
                <label for="fecha" require>Fecha</label>
                <input type="date" id="fecha" name="fecha"><br>
                <input type="button" value="registrar" onclick="registrarNoticia()">
                <input type="button" value="lista de noticias" onclick="cargar('listarNoticias.php')">

            </form>
            </div>
            <?php
?>