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
                <a href="./gestionpastel.php">Gestión</a>
                <span>Tienda</span>
                <span>ㅤㅤㅤㅤ</span>
                <a href="./gestionUsu.php">Gestión</a>
                <span>Usuarios</span>
                <?php
            } else {
                
            }
        }
    }
} else {
    
}
?>