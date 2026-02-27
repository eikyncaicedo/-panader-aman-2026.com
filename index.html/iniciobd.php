<?php
if(isset($_POST['Acceso']))
{
    $nombre = $_POST['Usuario'];
    $pass = $_POST['Password'];

    include "config.php";
    //$conn=
    $sql = "SELECT * FROM clientes WHERE Correo='".$nombre."' AND cc =
    '".$pass."'";
     $result = $conn->query($sql);
     if($result->num_rows>0){
     
        $user = $result->fetch_assoc();
            session_start();
      
            $_SESSION['admin'] = $user['Apellido'];
            header("Location:admin2.php");
            exit();
     }else{
     
     
    header("Location:login.php");	 
   }
   
 }
?>