<?php
$inc = include("./conexion/conexion.php");
if ($inc) {
    $consulta = "SELECT * FROM usuarios";
    $resultado = mysqli_query($conn, $consulta);
    if ($resultado) {
        while ($row = $resultado->fetch_array()) {
            $nombre = $row['nombre'];
            $mail = $row['email'];
            $tipousu = $row['tipo_usuario'];
            ?>
            <style>
                .btnEditar {
                    background-color: transparent;
                    border: none;
                    font-weight:  bolder;
                    border-bottom: 2px solid lightgreen;
                    
                }
                .btnEliminar {
                    background-color: transparent;
                    border: none;
                    font-weight:  bolder;
                    border-bottom: 2px solid red;
                }
            </style>
            <tr class="buscar">
                <td><?php echo $row['nombre'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['tipo_usuario'] ?></td>
                <td><a href="./editarUsu.php?id=<?php echo $row['id_usa']?>"><button class="btnEditar">Editar</button></a></td>
                <td><a href="#" onclick="mostrar('<?php echo $row['id_usa']?>')"><button class="btnEliminar">Eliminar</button></a></td>
                
            </tr>
            <?php
        }
    }
}
?>