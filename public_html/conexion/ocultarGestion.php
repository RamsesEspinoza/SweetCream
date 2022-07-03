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
                if($tipo == 2){
                    ?>
                 <a href="./gestionpastel.php">Gestionar</a>
                <?php
                }else{
                    
                }
            }
        }
    } else {
}
?>