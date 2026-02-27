<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="estilos2.css">
    <title>Registro de clientes</title>

</head>
<a hrfe="index.php"></a>
<form method="post">
  <h1>Formulario de registro</h1>
  <br>

Nombre: <input type="text" name="nombre" placeholder="Inserte nombre"><br><br>
Apellido: <input type="text" name="apellido" placeholder="Inserte apellido"><br><br>

edad: <input type="number" name="edad" placeholder="Inserte su edad" required><br><br>

telefono <input type="number" name="telefono" placeholder="Inserte su telefono" required><br><br>

correo: <input type="email" name="correo" placeholder="Inserte su correo" required><br><br>
cedula: <input type="number" name="cedula" placeholder="Inserte su cedula" required><br><br>


<input class="btn" type="submit" name="add" value="Agregar">
<br>
	<input class="btn" type="reset" name="reset" value="Cancelar">
</form>
<?php
if (isset($_POST['add']))
{
include'config.php';
//$student_id=$_POST['student_id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$cedula=$_POST['cedula'];
//INSERT INTO `cliente`(`id`, `Nombre`, `Apellido`, `Edad`, `Telefono`, `Correo electronico`, `cc`) VALUES(NULL,'mm','mm','6','34532','Im@gmail.com','123456');
$sql="INSERT INTO clientes(id,Nombre,Apellido,Edad,Telefono,Correo,cc) VALUES ('','$nombre','$apellido','$edad','$telefono','$correo','$cedula')";
 if($conn->query($sql)===false)
   {//Jika gagal menq-insert data tampilkan pesan dibawah 'Peritsh SQL Salah'
 trigger_error('eror sql: ' . $sql . ' Error: '. $conn->error, E_USER_ERROR);
      }
else
{//Jika berhasil alihkan ke halaman tampil.php
   echo"<script> alert('cliente se ha agregado exitosamente')</script>";

}
}

?>
