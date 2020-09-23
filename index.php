<!DOCTYPE html>
<html>
<head>
	<title>Segundo Parcial Sistemas, Ciencias de la computación  </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="style.css">
</head>
<?php
	session_start();
?>
<body>
	<!-- <div id="contenedor">
		<div id="cabeza"> 
			<div id="cabeza-izq"><img src="images/usfx.png" alt=""></div>
			<div id="cabeza-cnt">
				<span class="rojo">UNIVERSIDAD DE SAN FRANCISCO XAVIER	</span><br>
				<span class ="celeste">Facultad de Tecnología</span>
				<span class ="rojo">Sucre</span> 
				<span class ="amarillo">e-Bol</span>
				<span class ="verde">ivia</span>	
				<br> Carreras: Ing de Sistemas,Ing en Ciencias de la Computación <br>
				Semestre 1-2020 <br>	
				Alumno: <span class="celeste-bg"></span> CU:  <span class="celeste-bg">111-</span>Numero Lista:<span class="celeste-bg">22</span><br>
				Usuario:<span class="celeste-bg"> <?php echo isset($_SESSION['usuario'])?$_SESSION['usuario']:'';?> </span> Nivel: <span class="celeste-bg"> <?php echo isset($_SESSION['nivel'])?$_SESSION['nivel']:''; ?> </span>
			</div>
			<div id="cabeza-der">
				<img src="images/tecnologia.png" alt="">
			</div>

		</div>
		<div id="contenido">
		<br><br><br><br><br>
			
		</div>	
		<div id="derecha">
		<ul class="menu">
			<li><a href ="#"" >Pregunta 1</a></li>
			<li><a href ="#"onclick="cargar('tresenraya.html')" >Pregunta 2</a></li>
			<li><a href ="#" onclick="cargar('login.html')" >Pregunta 3</a></li>
			<li><a href ="#" onclick="cargar('listarUsuarios.php')">Pregunta 4</a></li>
			<li><a href ="#" <?php   
			if(isset($_SESSION['usuario'])){
        		if($_SESSION['nivel'] == 1){
					?> onclick="cargar('registrar.php')" <?php
				}else{
					?> onclick="cargar('listarnoticias.php')" <?php
				}
			}else{
				?> onclick="cargar('login.html')" <?php
			}
            ?> >Pregunta 5</a></li>
		</ul>
		</div>
		<div id="resultado"> resultado </div>

		<div id="pie"> Todos los Derechos Reservados </div>
		
	</div> -->




	<section >
        <div class="container">
            <div class="row">
                <div class="col-12 border">
                    <div class="row">
                        <div class="col-12 col-sm-3">
                            <img src="./images/usfx.png" alt="">
                        </div>
                        <div class="col-12 col-sm-6">
                            <h5 class="text-danger">UNIVERSIDAD DE SAN FRANCICO XAVIER</h5>
                            <span class="text-info m-0">Facultad de tecnologia </span>
                            <span class="text-danger">Sucr</span>
                            <span class="text-warning ">e-Bol</span>
                            <span class="text-success inline">ivia</span>
                            <p class="m-0">Carreras: Ing de Sistemas, Ing en ciencias de la computacion</p>
                            <p class="m-0">Exmen de Auxiliatura 2020</p>
                            <span class="m-0">Postulante: Torres Vargar Carlos Marcelo</span>
                            <span>CU:111-74</span><br>
                            <span class="m-0">Usuario:<?php echo isset($_SESSION['usuario'])?$_SESSION['usuario']:"" ?></span>
                            <span>Nivel:<?php echo isset($_SESSION['nivel'])?$_SESSION['nivel']:"" ?></span>
                        </div>
                        <div class="col-12 col-sm-3">
                            <img src="./images/tecnologia.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
				
                <div class="col-10 col-sm-10 bg-secondary" id="contenido">
                </div>
                <div class="col-2 d-block h-100 d-sm-none p-0">
                    <ul class="nav flex-column bg-primary">
                        <li class="nav-item bg-light border border-primary">
                            <a class="nav-link active " href="#">1</a>
                        </li>
                        <li class="nav-item bg-light border border-primary">
                            <a class="nav-link" href="#">2</a>
                        </li>
                        <li class="nav-item bg-light border border-primary">
                            <a class="nav-link" href="#">3</a>
                        </li>
                        <li class="nav-item bg-light border border-primary">
                            <a class="nav-link" href="#">4</a>
                        </li>
                        <li class="nav-item bg-light border border-primary">
                            <a class="nav-link" href="#">5</a>
                        </li>
                    </ul>
                </div>
                <div class="col-2 p-0 d-none d-sm-block">
                    <ul class="nav flex-column bg-primary pr-3">
                        <li class="nav-item bg-light border border-primary">
                            <a class="nav-link active " href="#">pregunta1</a>
                        </li>
                        <li class="nav-item bg-light border border-primary">
                            <a class="nav-link" href="#" onclick="cargar('tresenraya.html',event)" >pregunta2</a>
                        </li>
                        <li class="nav-item bg-light border border-primary">
                            <a class="nav-link" href="#"  onclick="cargar('login.html',event)">pregunta3</a>
                        </li>
                        <li class="nav-item bg-light border border-primary">
                            <a class="nav-link" href="#"  onclick="cargar('listarUsuarios.php',event)">pregunta4</a>
                        </li>
                        <li class="nav-item bg-light border border-primary">
                            <a class="nav-link" href="#" onclick="cargar('listarnoticias.php',event)">pregunta5</a>
                        </li>
                    </ul>
				</div>
				
            </div>
            <div class="row">
                <div class="col-12 bg-warning" id="resultado">resultado</div>
                <div class="col-12 bg-info">Todos los derechos reservados</div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="script.js"></script>
