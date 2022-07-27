<header>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</header>
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
           window.location.href = './gestionUsu_1.php';
           </script>";
 }else{
     echo "<script>
         alert('Error');
         window.history.go(-1);
         </script>";
 }
?>
