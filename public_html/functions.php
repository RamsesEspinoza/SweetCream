<?php
$inc = include("./conexion/conexion.php");
if($inc){
    $consulta = "SELECT * FROM pastel_n";
        $resultado = mysqli_query($conn,$consulta);
        if($resultado){
            while ($row = $resultado->fetch_array()){
                $id = $row['pastel_id'];
                $nombre = $row['nombre'];
                $precio = $row['precio'];
            }
        }
    }
function add_to_cart($id, $cantidad = 1){
    $nuevo_producto = [
        'pastel_id' => NULL,
        'nombre' => NULL,
        'precio' => NULL,
        'cantidad' => NULL,
    ];
    $producto = productoID($id);
    if (!$producto){
        return false;
    }
    $nuevo_producto = [
        'pastel_id' => $producto['pastel_id'],
        'nombre' => $producto['nombre'],
        'precio' => $producto['precio'],
        'cantidad' => $cantidad,
    ];
}

function productoID($idproducto){
    if($inc){
        $consulta = "SELECT nombre, precio FROM pastel_n where pastel_id = $idproducto";   
    }   
}

function obtenerCarrito(){
    if (isset($_SESSION['cart'])){
        return $_SESSION['cart'];
    }
    $cart = ['productos' => []];
    $_SESSION ['cart'] = $cart;
    return $_SESSION ['cart'];
}