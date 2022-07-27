
<?php
include './conexion/conexion.php';
$id = $_POST["id"];
$nombre = $_POST["NombrePastel"];
$precio = $_POST["PrecioPastel"];
$desc = $_POST["DescPastel"];
$imagen = $_POST["ImgPastel"];

$query = "UPDATE pastel_n SET nombre='$nombre', precio='$precio', descripcion='$desc', img_pastel='$imagen' WHERE pastel_id='$id' ";

 $result = mysqli_query($conn,$query) or die(mysqli_error());
 if($result){
     echo "<script>
         window.location.href = './gestionpastel_1.php?pagina=1';
           </script>";
 }else{
     echo "<script>
         alert('Error');
         window.history.go(-1);
         </script>";
 }
?>
