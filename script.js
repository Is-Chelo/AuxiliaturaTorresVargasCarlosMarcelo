function cargar(pagina, e) {
    e.preventDefault();
    var ajax = new XMLHttpRequest() 
    ajax.open("get", pagina, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            document.getElementById("contenido").innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send(); 
}



let turno = true;
let array = [0, 0, 0,
    0, 0, 0,
    0, 0, 0]

function tresenraya(i) {
        let jugador = ''
        
        if (array[i] != 0) {
            alert("Posicion Ocupada")
        } else {
            if (turno) {
                jugador = 'X'
                turno = false;
                $('#btn' + i + '').html("X")
                $('#resultado').html("turno X")
            } else {
                jugador = 'O'
                turno = true;
                $('#btn' + i + '').html("O");
                $('#resultado').html("Turno O") 
            }
    
            array[i] = jugador
        }
    
    
        console.log(array)
    
    }




function llamarautenticar(pagina) {
    var ajax = new XMLHttpRequest() 
    var correo = document.getElementById('correo-au').value;
    var password = document.getElementById('password-au').value;
    var parametros ="correo=" + encodeURI(correo) +"&password=" + encodeURI(password) + "&Nocache=" + Math.random();
    ajax.open("post", pagina, true);
    ajax.onreadystatechange = function() { 
        if (ajax.readyState == 4) {
            document.getElementById("contenido").innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
    ajax.send(parametros); 
}

function registrarNoticia(){
    var ajax = new XMLHttpRequest() 
    var imagen = document.getElementById('imagen').value;
    var titulo = document.getElementById('titulo').value;
    var texto = document.getElementById('texto').value;
    var fecha = document.getElementById('fecha').value;

    if(titulo == '' || texto ==''|| fecha ==''){
        document.getElementById('vacio').innerHTML='no puede enviar campos vacios';
    }else{
    
        var parametros = "imagen=" + encodeURI(imagen) +"&titulo=" + encodeURI(titulo)+ "&texto=" + encodeURI(texto)+"&fecha=" + encodeURI(fecha)+"&Nocache=" + Math.random();
        ajax.open("post", "registarNoticia.php", true); 
        ajax.onreadystatechange = function() { 
            if (ajax.readyState == 4) {
                document.getElementById("contenido").innerHTML = ajax.responseText;
            }
        }
        ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");  
        ajax.send(parametros);
    }
}

function cambiar(correo){
    
    console.log(correo)
    var ajax = new XMLHttpRequest() 
    ajax.open("get", `actualizarUsuario.php?correo=${correo}`, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
           console.log(ajax.responseText);
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}



function insertarComentario(id){;
    var ajax = new XMLHttpRequest() 
    var parametros = "id=" + id + "&Nocache=" + Math.random();
    ajax.open("post", 'formInsertarComentario.php', true); 
    ajax.onreadystatechange = function() { 
        if (ajax.readyState == 4) {
             document.getElementById("resultado").innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
    ajax.send(parametros); 
}

function RegistrarComentario(){
    comentario = document.getElementById('comentario').value;
    idnoticia = document.getElementById('idnoticia').value;
    var ajax = new XMLHttpRequest() 
    var parametros = "id=" + idnoticia +"&comentario=" + comentario + "&Nocache=" + Math.random();
    ajax.open("post", 'insertarComentario.php', true); 
    ajax.onreadystatechange = function() { 
        if (ajax.readyState == 4) {
            //  document.getElementById("resultado").innerHTML = ajax.responseText;
        alert("Registrado")
        
        }
    }
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"); 
    ajax.send(parametros); 
}
