<?php
# Initialize the session
session_start();

# If user is not logged in then redirect him to login page
if (empty($_SESSION["admin"])) {
    # Lo redireccionamos al formulario de inicio de sesión
    header("Location: login");
    # Y salimos del script
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="estilacho.css">
    <title> Menu lateral hamburguesa</title>
</head>
<body>
    <header class="main-header">
        <div class="logo">
            <!-- Aquí irá tu logo. Reemplaza 'ruta/a/tu/logo.png' con la URL real de tu imagen. -->
            <!-- Puedes ajustar el 'alt' para accesibilidad y el 'width' si es necesario. -->
            <a href="#"><img src="logotipazo.png" alt="Logo de la Empresa" width="80px"></a>
        </div>
        <nav class="main-nav">
            <ul>
                <li><a href="admin2.php">Inicio</a></li>
                <li><a href="Productos.html">Productos</a></li>
                <li><a href="Contatos.html">Contactos</a></li>
            </ul>
        </nav>
    </header>
<br>
<br>
<br>
<br>
    <h1 style=" font-color: white; text-align: center;" >Hola, <?= htmlspecialchars($_SESSION["admin"]); ?></h1>
</br>
    <br>
    <h1 style=" font-color: white; text-align: center;" >Le damos la bienvenida al</h1>
    <h1 style=" font-color: white; text-align: center;" >sitio oficial de la panaderia mana</h1>
    <h1 style=" font-color: white; text-align: center;" >esperamos que su experiencia en este sitio web sea de su agrado </h1>
    <br>
    <br>
     <h1 style=" font-color: white; text-align: center;" >Feliz dia tarde o noche estimado usuario </h1>  
    <br>
    <br>
    <br>
    <br>
    <br>
    <h1 style=" font-color: white; text-align: center;" >Frase de la semana:<h1 style=" font-color: white; text-align: center;" >frase de la semana: Tu vida no mejora por casualidad, mejora con el cambio.</h1>
    <main class="main;"></main> 
    <script src="js/scripts.js"></script>
    <script
      src="https://kit.fontawesome.com/11614eb144.js"
      crossorigin="anonymous"
      ></script>
</body>
</html>    


