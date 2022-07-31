<?php
$inc = include("./conexion/conexion.php");
if ($inc) {
    $consulta = "SELECT * FROM pedidos";
    $resultado = mysqli_query($conn, $consulta);
    if ($resultado) {
        while ($row = $resultado->fetch_array()) {
            $total = $row['total'];
            $codigo = $row['codigo_seguridad'];
            $detalle = $row['Detalle'];
            $estado = $row['estado'];
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
                <td><?php echo $codigo ?></td>
                <td><?php echo $detalle ?></td>
                <td>$<?php echo $total ?>.00</td>
                <td><?php echo $estado ?></td>
                <td><a onclick="marcarCompletado('<?php echo $row['id_pedido']?>')"><button class="btnEditar">Marcar como completado</button></a></td>
                <td><a onclick="eliminarPedido('<?php echo $row['id_pedido']?>')"><button class="btnEliminar">Eliminar</button></a></td>
                
            </tr>
            <?php
        }
    }
}
?>