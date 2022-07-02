<?php

session_start();

$inc = include("./conexion/conexion.php");
if (isset($_SESSION["email"])) {
    $correoV = $_SESSION["email"];
    $consulta = "SELECT nombre FROM usuarios WHERE email='$correoV'";
    $resultado = mysqli_query($conn, $consulta);
    if ($resultado) {
        while ($row = $resultado->fetch_array()) {
            $nombre = $row['nombre'];

            if (isset($_SESSION['email'])) {
                echo $nombre;
            }
        }
    }
} else {
    echo 'Log in ㅤㅤ';
}
if ($inc) {
    
}
?>


