<?php
include './conexion/conexion.php';
$id = $_GET["id"];

$consulta = "DELETE FROM pedidos WHERE id_pedido='$id' ";

 $result = mysqli_query($conn,$consulta) or die(mysqli_error());
 if($result){
     echo "<script>
         window.location.href = './gestionPedidos.php';
           </script>";
 }else{
     echo "<script>
         alert('Algo salio mal :/');
         window.history.go(-1);
         </script>";
 }
?>
