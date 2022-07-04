<?php
session_start();
$inc = include("./conexion/conexion.php");
if (isset($_SESSION["email"])) {
    $correo = $_SESSION["email"];
    if (isset($_POST["txtnombre"])) {
        $query = 'INSERT INTO comentarios (comentario, email_com, nombre_com, calificacion)
            VALUES(\'' . $_POST["txtmensaje"] . '\',\'' . $correo . '\',
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