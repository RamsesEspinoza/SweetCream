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
                ?>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="<?php $row['img_pastel'];?>">
                                <div class="product__label">
                                    <span>Cupcake</span>
                                </div>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#"><?php echo $nombre;?></a></h6>
                                <div class="product__item__price">$<?php echo $precio;?>.00</div>
                                <form action="./functions.php" method="POST">
                                    <input type="text" class="form-control" id="idnombre" name="txtnombre" value="<?php echo $row["nombre"];?>" hidden="">
                                    <input type="text" class="form-control" id="idnombre" name="txtprecio" value="<?php echo $row["precio"];?>" hidden="">
                                    <div class="cart_add">
                                        <button type="submit" data-toggle="modal" data-target="#exampleModal">
                                                Añadir al carrito
                                            </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php
            }
        }
    }
?>
