<?php
    $inc = include("./conexion/conexion.php");
    if (isset($_SESSION["email"])) {
        $correoV = $_SESSION["email"];
        $consulta = "SELECT SUM(cantidad) FROM carrito WHERE email_usu = '$correoV'";
        $resultado = mysqli_query($conn, $consulta);
        if ($resultado) {
            while ($row = $resultado->fetch_array()) {
                ?>
                <span><?php echo $row['SUM(cantidad)']; ?></span>
                <?php
            }
        }
    } else {
        ?>
                <span>0</span>
                <?php
}
?>