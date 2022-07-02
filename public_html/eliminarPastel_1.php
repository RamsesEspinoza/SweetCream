<?php
include './conexion/conexion.php';
session_start();
if (isset($_SESSION["email"])) {
    $correoV = $_SESSION["email"];
$query = "DELETE FROM carrito WHERE email_usu='$correoV' ";

 $result = mysqli_query($conn,$query) or die(mysqli_error());
 if($result){
     echo "<script>
         window.location.href = './catalogo.php';
           </script>";
 }else{
     echo "<script>
         alert('Algo salio mal :/');
         window.history.go(-1);
         </script>";
 }
} else {
    echo "<script>
         window.location.href = './catalogo.php';
           </script>";
}

?>
