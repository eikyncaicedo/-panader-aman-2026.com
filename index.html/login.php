<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PetShop</title>
    <link rel="stylesheet" href="estilos2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <form action="iniciobd.php" method="POST" >
    <div class="formulario">
        <img src="img/Avatar.png" class="Avatar" alt="Avatar Image">
        <h2>Iniciar Sesión</h2>
        <form action="iniciobd.php" method="POST">
            <i class="fa-solid fa-user"></i>
            <input type="text" placeholder="Correo" name="Usuario"/>
            <br>
            <br>
            <i class="fa-solid fa-lock"></i>
            <input type="password" placeholder="Clave" name="Password"/>
            <br>
            <br>
            <br>
            <input class="btn btn-primary mb-4" style="width:100%" type="submit" value="Acceso" name="Acceso"/>
            <br>
        </form>
    </div>

</body>
</html>