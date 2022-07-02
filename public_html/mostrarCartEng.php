<?php
    $inc = include("./conexion/conexion.php");
    if (isset($_SESSION["email"])) {
        $correoV = $_SESSION["email"];
        $consulta = "SELECT * FROM carrito WHERE email_usu='$correoV'";
        $resultado = mysqli_query($conn, $consulta);
        if ($resultado) {
            while ($row = $resultado->fetch_array()) {
                $nombre = $row['Nombre'];
                ?>
                <tr>
                    <th><?php echo $row['Nombre']; ?></th>
                    <th><?php echo $row['precio']; ?></th>
                    <th><?php echo $row['cantidad']; ?></th>
                </tr>
                <?php
            }
        }
    } else {
}
?>