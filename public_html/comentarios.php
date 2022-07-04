<?php

$inc = include("./conexion/conexion.php");
    if(isset($_SESSION["email"])){
        if (isset($_POST["txtnombre"])) {
    $query = 'INSERT INTO comentarios (comentario, email_com, nombre_com, calificacion)
            VALUES(\'' . $_POST["txtmensaje"] . '\',\'' . $_POST["txtcorreo"] . '\',
                \'' . $_POST["txtnombre"] . '\',\'' . $_POST["txtcalificacion"] . '\')';
    $result = mysqli_query($conn, $query) or die(mysqli_error());
    if ($result) {
        echo "<script>
         alert('Gracias por tus Comentarios');
         window.location.href = './index.php';
         </script>";
    }
}
    } else {
       echo "<script>
         
         window.location.href = './login.php';
         </script>"; 
}
?>