 <?php
include 'config.php';
 // $student_id=$_POST['student_id'];
  $name=$_POST['name'];
  $majors=$_POST['majors'];
  $gender=$_POST['gender'];
  $address=$_POST['address'];
 
  $sql="INSERT INTO clientes (student_id,name,majors,gender,address) VALUES ('','$name','$majors','$gender','$address')";
  if($conn->query($sql) === false)
  { // Jika gagal meng-insert data tampilkan pesan dibawah 'Perintah SQL Salah'
    trigger_error('eror sql: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
  }  
  else 
  { 
    echo "<script>alert('Agregado exitosamente !');
   window.location.replace('index.php');
    </script>";
  
  }
  ?>