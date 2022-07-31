<?php

include './conexion/conexion.php';
session_start();
if (isset($_SESSION["email"])) {
    $correoV = $_SESSION["email"];
    $query = "SELECT codigo_seguridad FROM pedidos WHERE nom_usa='$correoV' AND fecha = (SELECT MAX(fecha) FROM pedidos) AND hora = (SELECT MAX(hora) FROM pedidos)";
    $codigo = 'no c';
    $result = mysqli_query($conn, $query) or die(mysqli_error());
    if ($result) {
        while ($row = $result->fetch_array()){
            $codigo = $row['codigo_seguridad'];
        }
        $paracorreo = $correoV;
        $titulo = "Gracias por tu compra!";
        $mensaje = "Gracias por tu compra, por favor espera 2 dias hábiles para recojer tu pedido \n tu código es: ".$codigo ;
        $tuccoreo = "From: SweetCream16@outlook.es";
        mail($paracorreo, $titulo, $mensaje, $tuccoreo);
        echo "<script>
         location.href = './eliminarPastel_1.php';
         </script>";
    } else {
        echo "<script>
         alert('Algo salio mal :/');
         window.history.go(-1);
         </script>";
    }
} else {
    echo "<script>
        window.history.go(-1);
           </script>";
}
?>
