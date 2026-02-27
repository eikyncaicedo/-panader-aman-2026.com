 <a href="add.php">Agregar</a>
<br><br>
<table border="">
 <tbody>
    <tr>
       <th>ID</th>
       <th>Nombre</th>
       <th>Apellido</th>
       <th>Edad</th>
       <th>Telefono</th>
       <th>Correo</th>
       <th>cc</th>
    </tr>
    <?php
    include 'config.php';
    $a=mysqli_query($conn,"SELECT * FROM clientes");
    foreach ($a as $b)
    {
    ?>
    <tr>
       <td><?= $b['id']; ?></td>
       <td><?= $b['Nombre']; ?></td>
       <td><?= $b['Apellido']; ?></td>
       <td><?= $b['Edad']; ?></td>
       <td><?= $b['Telefono']; ?></td>
       <td><?= $b['Correo']; ?></td>
       <td><?= $b['cc']; ?></td>
       </td>
    </tr>  
    <?php } ?>                          
 </tbody>
</table>
