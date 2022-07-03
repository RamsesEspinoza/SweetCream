<?php
$inc = include("./conexion/conexion.php");
if ($inc) {
    $consulta = "SELECT * FROM pastel_n";
    $resultado = mysqli_query($conn, $consulta);
    if ($resultado) {
        while ($row = $resultado->fetch_array()) {
            $id = $row['pastel_id'];
            $nombre = $row['nombre'];
            $precio = $row['precio'];
            ?>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="<?php echo $row['img_pastel']; ?>">
                        <div class="product__label">
                            <span>SweetCream</span>
                        </div>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#"><?php echo $nombre; ?></a></h6>
                        <div class="product__item__price">$<?php echo $precio; ?>.00</div>
                        <form action="./functions.php" method="POST">
                            <input type="text" class="form-control" id="idnombre" name="txtnombre" value="<?php echo $row["nombre"]; ?>" hidden="">
                            <input type="text" class="form-control" id="idnombre" name="txtprecio" value="<?php echo $row["precio"]; ?>" hidden="">
                            <div class="cart_add">
                                <div class="product__item__text">
                                    <div class="product__item__price">ㅤㅤㅤㅤㅤ</div>
                                    <div class="cart_add">
                                        <style>
                                            .botonMenu {
                                                background-color: transparent;
                                                border: none;
                                                font-weight:  bolder;
                                                border-bottom: 2px solid darkorange;
                                            }
                                        </style>
                                        <button type="submit" class="botonMenu">Agregar al carrito</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php
        }
    }
    $articulos_x_pagina = 9;
// contar articulos de nuestra base de datos
    $total_articulos_db = $resultado->rowCount();
// echo$total_articulos_db;
    $paginas = $total_articulos_db / 9;
    $paginas = ceil($paginas);
}
?>
