<?php
    $inc = include("./conexion/conexion.php");
    if (isset($_SESSION["email"])) {
        $correoV = $_SESSION["email"];
        $consulta = "SELECT SUM(cantidad) FROM carrito WHERE email_usu = '$correoV'";
        $resultado = mysqli_query($conn, $consulta);
        if (!empty($resultado)) {
            while ($row = $resultado->fetch_array()) {
                $total = $row['SUM(cantidad)'];
                if($total != 0){
                    ?>
                <span><?php echo $row['SUM(cantidad)']; ?></span>
                <?php
                } else {
                    ?>
                <span>0</span>
                <?php
                }
            }
        }
    } else {
        ?>
                <span>0</span>
                <?php
}
?>