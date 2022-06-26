<?php
session_start();
$inc = include("./conexion/conexion.php");
    if (isset($_SESSION["email"])) {
        $correoV = $_SESSION["email"];
    $consulta = 'SELECT * FROM carrito WHERE Nombre= \'' . $_POST["txtnombre"] . '\' AND email_usu = \'' . $correoV . '\'';
        $resultado = mysqli_query($conn, $consulta);
        if ($resultado) {
            $bool = true;
            while ($row = $resultado->fetch_array()) {
                $nombre = $row['Nombre'];
                $cant = $row['cantidad'];
                $cantidad = intval($cant);
                $bool = false;
                if($nombre){
                    $query = 'UPDATE carrito SET cantidad = \'' . ++$cantidad . '\' WHERE Nombre = \'' . $_POST["txtnombre"] . '\'';
                    $result = mysqli_query($conn, $query) or die(mysqli_error());
                    echo "<script>
                    alert('Actualiza');
                    window.location.href = './catalogo.php';
                    </script>";
                }
            } 
            if ($bool){
                $query = 'INSERT INTO carrito (Nombre,precio,email_usu, cantidad)
                VALUES(\'' . $_POST["txtnombre"] . '\',\'' . $_POST["txtprecio"] . '\',
                    \'' . $correoV . '\',1)';
                $result = mysqli_query($conn, $query) or die(mysqli_error());
                echo "<script> 	    alert('Agregado al arrito');
                        window.location.href = './catalogo.php';
                     </script>";
        }
    }
    } else {
        echo "<script>
                    alert('Debes inicar sesion para ver este apartado');
                    </script>";
    }

