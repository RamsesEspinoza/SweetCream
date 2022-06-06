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
                            <div class="product__item__pic set-bg" data-setbg="img/shop/product-1.jpg">
                                <div class="product__label">
                                    <span>Cupcake</span>
                                </div>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#"><?php echo $nombre;?></a></h6>
                                <div class="product__item__price">$<?php echo $precio;?>.00</div>
                                    <div class="cart_add">
                                        <a type="submit" data-toggle="modal" data-target="#exampleModal" 
                                           href="../functions.php?id=<?php echo $id;?>">Add to cart</a>    
                                    </div>
                            </div>
                        </div>
                    </div>
                <?php
            }
        }
    }
?>
