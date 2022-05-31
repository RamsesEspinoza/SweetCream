<?php
    $inc = include("./conexion/login.php");
    if($inc){
        $consulta = "SELECT * FROM pastel_n";
        $resultado = mysqli_query($conn,$consulta);
        if($resultado){
            while ($row = $resultado->fetch_array()){
                $id = $row['pastel_id'];
                $nombre = $row['nombre'];
                $precio = $row['precio'];
                ?>
<div>
    <b>id: </b><?php echo $id;?><br>
    <b>Nombre: </b><?php echo $nombre;?><br>
    <b>precio:: </b><?php echo $precio;?><br>
</div>
                <?php
            }
        }
    }
?>