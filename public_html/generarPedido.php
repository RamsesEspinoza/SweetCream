<?php

include './conexion/conexion.php';
session_start();
date_default_timezone_set('America/Mexico_City');
if (isset($_SESSION["email"])) {
    $correoV = $_SESSION["email"];
    $consul = "SELECT SUM(cantidad*precio) as resultado FROM carrito WHERE email_usu = '$correoV'";
    $res = mysqli_query($conn, $consul);
    if ($res) {
        while ($row = $res->fetch_array()) {
            $presio = $row['resultado'];
        }
    }
    $consulta = "SELECT GROUP_CONCAT(Nombre,cantidad) AS lista FROM carrito WHERE email_usu='$correoV'";
    $resultado = mysqli_query($conn, $consulta);
    $codigo = rand(10000, 99999);
    $DateAndTime = date('Y-m-d h:i:s a');
    $time = date("H:i:s");
    if ($resultado) {
        while ($rowi = $resultado->fetch_array()) {
            $AJA=$rowi['lista'];
            $query = 'INSERT INTO pedidos (total,Detalle,nom_usa,codigo_seguridad,fecha,hora)
            VALUES(\'' . $presio . '\',\'' . $AJA. '\',\'' . $correoV. '\',\'' . $codigo. '\',\'' . $DateAndTime. '\',\'' . $time. '\')';
            $resul = mysqli_query($conn, $query);
            if ($resul) {
            echo "<script>
               location.href = './enviarCodigo.php';
                </script>";
            }
        }
    }
} else {
    echo "<script>
        window.history.go(-1);
           </script>";
}
?>
