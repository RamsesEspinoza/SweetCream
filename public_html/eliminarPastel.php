<?php
include './conexion/conexion.php';
$id = $_GET["id"];


$query = "DELETE FROM pastel_n WHERE pastel_id='$id' ";

 $result = mysqli_query($conn,$query) or die(mysqli_error());
 if($result){
     echo "<script>
         alert('Se elimino con exito.'); 
         window.location.href = './gestionpastel.php';
           </script>";
 }else{
     echo "<script>
         alert('Algo salio mal :/');
         window.history.go(-1);
         </script>";
 }
?>
