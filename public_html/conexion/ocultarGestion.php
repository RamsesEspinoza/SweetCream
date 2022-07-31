<?php
$inc = include("./conexion/conexion.php");
if (isset($_SESSION["email"])) {
    $correoV = $_SESSION["email"];
    $consulta = "SELECT * FROM usuarios WHERE email='$correoV'";
    $resultado = mysqli_query($conn, $consulta);
    if ($resultado) {
        while ($row = $resultado->fetch_array()) {
            $nombre = $row['tipo_usuario'];
            $tipo = intval($nombre);
            if ($tipo == 2) {
                ?>
                <a href="./gestionpastel.php">Gestión de tienda</a>
                <a href="./gestionUsu.php">Gestión de usuarios</a>
                <a href="./gestionPedidos.php">Gestión de Pedidos</a>
                <?php
            } else {
                
            }
        }
    }
} else {
    
}
?>