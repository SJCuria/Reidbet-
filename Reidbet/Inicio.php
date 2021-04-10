<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Reidbet</title>
    <link rel="stylesheet" href="./css/normalize.css">
    <script src="./js/modernizr-custom (1).js"></script>
    <link rel="stylesheet" href="./css/styleI.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    
    <header>
        <div id="izquierdaH">
            <img src="./img/logo.png" alt="logo" id="logo">
            <h1>eidbet</h1>
        </div>
        <div id="derechaH">
            <button>
                <img src="./img/idioma" alt="imagenIdioma" id="idioma">
                <p>Idioma</p>
                <img src="./img/flecha abajo.png" alt="flecha" id="flecha">
            </button>
        </div>
    </header>
    <section>
        <article>
            <h1>Gana Premios Jugando</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, omnis fugit veniam obcaecati distinctio, assumenda facere, ut ipsa accusantium reprehenderit culpa aut tempora quisquam? Accusantium ipsa ea dolor minima earum? Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur dignissimos fugit, necessitatibus libero modi illum blanditiis aliquid fugiat ab! Quidem consectetur quasi cum error enim repellendus illum nobis blanditiis est.</p>
        </article>
        <aside>
        <div id="contenedor">
            <button class="opciones" onclick="cambiandoFormulario()">Inicio de sesion</button>
            <button class="opciones" onclick="cambiandoFormulario2()">Registrate</button>
            <div id="Inicio">
                <form action="index.html" method="POST" >
                    <label for="">Usuario</label>
                    <input type="text" placeholder="user" class="usuario">
                    <label for="">Contraseña</label>
                    <input type="password" placeholder="contra" class="usuario">
                    <input type="submit" value="Inicia Sesion" id="inicioSubmit" style="background-color: rgb(255, 94, 0);">
                </form>
                <button class="inicioRedes" style="background-color: #375a9a;"><img src="/img/facebook.PNG" alt=""> Inicia con Facebook</button>
                <button class="inicioRedes" style="background-color: #ee6149;"><img src="/img/google.png" alt=""> Inicia con Google</button>
                <button class="inicioRedes" style="background-color: #008ed5;"><img src="/img/twitter.png" alt=""> Inicia con Twitter</button>
            </div>
            <div id="registrarse">
                <form  method="POST">
                    <label for="">Usuario</label>
                    <input type="text" name="usuario" id="4" placeholder="Usuario">
                    <label for="">Mail</label>
                    <input type="email" name="mail" id="3" placeholder="Ejemplo@gmail.com">
                    <label for="">Contraseña</label>
                    <input type="password" name="contraseña" id="2" placeholder="Contraseña">
                    <label for="">Repite la contraseña</label>
                    <input type="password" name="contraseña1" id="1" placeholder="Repite la contraseña">
                    <input type="submit" name="registrate" value="Registrate" style="background-color: rgb(255, 94, 0);">
                </form>
                    <?php
                        include (registrar.php);
                    ?>
                
            </div>
        </div>
        </aside>
    </section>
    <script >
        let registro = document.getElementById("registrarse");
let inicio = document.getElementById("Inicio");


function cambiandoFormulario(){
    registro.style.display = "none";
    inicio.style.display = "block";
}
function cambiandoFormulario2() {
    registro.style.display = "block";
    inicio.style.display = "none";
}
    </script>
    <footer></footer>
</body>
</html>