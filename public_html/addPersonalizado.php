<header>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</header>
<?php
include './conexion/conexion.php';
session_start();
$correoV = $_SESSION["email"];
$query = "INSERT INTO carrito (Nombre,precio,email_usu,cantidad) values('Personalizado',440,'$correoV',1)";

 $result = mysqli_query($conn,$query) or die(mysqli_error());
 if($result){
     echo "<script>
           window.history.go(-1);
           </script>";
 }else{
     echo "<script>
         alert('Error');
         window.history.go(-1);
         </script>";
 }
?>
