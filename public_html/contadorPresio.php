<?php
    $inc = include("./conexion/conexion.php");
    if (isset($_SESSION["email"])) {
        $correoV = $_SESSION["email"];
        $consulta = "SELECT SUM(cantidad*precio) as resultado FROM carrito WHERE email_usu = '$correoV'";
        $resultado = mysqli_query($conn, $consulta);
        if ($resultado) {
            while ($row = $resultado->fetch_array()) {
                $presio=$row['resultado'];
                if($presio != 0){
                    ?>
                <span>$<?php echo $presio; ?>.00</span>
                <?php
                } else {
                    ?>
                <span>$0.00</span>
                <?php
                }
                
            }
        }
    } else {
        ?>
                <span>$0.00</span>
                <?php
}
?>