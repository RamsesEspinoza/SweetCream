<?php
include './conexion/conexion.php';
$id = $_POST["id"];
$nombre = $_POST["txtname"];
$mail = $_POST["txtEmail"];
$desc = $_POST["txttipo"];
$pass = $_POST["txtpass"];

$query = "UPDATE usuarios SET nombre='$nombre', email='$mail', password='$pass', tipo_usuario='$desc' WHERE id_usa='$id' ";

 $result = mysqli_query($conn,$query) or die(mysqli_error());
 if($result){
     echo "<script>
         alert('Se han actualizado los datos'); 
         window.location.href = './gestionUsu.php';
           </script>";
 }else{
     echo "<script>
         alert('Error');
         window.history.go(-1);
         </script>";
 }
?>
