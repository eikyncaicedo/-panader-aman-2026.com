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

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User login system</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/main.css">
  <link rel="shortcut icon" href="./img/favicon-16x16\" type="image/x-icon">
</head>

<body>
  <div class="container">
    <div class="alert alert-success my-5">
      esta es tu cuenta
    </div>
    <!-- User profile -->
    <div class="row justify-content-center">
      <div class="col-lg-5 text-center">
        <img src="./img/blank-avatar.jpg" class="img-fluid rounded" alt="User avatar" width="180">
        <h4 class="my-4">Hola, <?= htmlspecialchars($_SESSION["admin"]); ?></h4>
        <link rel="stylesheet" href="./logout">
      </div>
    </div>
  </div>

</body>

</html>