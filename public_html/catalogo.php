<!DOCTYPE html>
<html lang="zxx">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Cake Template">
        <meta name="keywords" content="Cake, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tienda</title>

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
              rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
              rel="stylesheet">

        <!-- Css Styles -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/flaticon.css" type="text/css">
        <link rel="stylesheet" href="css/barfiller.css" type="text/css">
        <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
        <link rel="stylesheet" href="css/nice-select.css" type="text/css">
        <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>

    <body>

        <!-- Page Preloder -->
        <div id="preloder">
            <div class="loader"></div>
        </div>

        <!-- Offcanvas Menu Begin -->
        <div class="offcanvas-menu-overlay"></div>
        <div class="offcanvas-menu-wrapper">
            <div class="offcanvas__cart">
                <div class="offcanvas__cart__links">
                    <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                    <a href="#"><img src="img/icon/heart.png" alt=""></a>
                </div>
                <div class="offcanvas__cart__item">
                    <a href="#" data-toggle="modal" data-target="#exampleModal"><img src="img/icon/cart.png" alt="" > <span>0</span></a>
                    <div class="cart__price">Cart: <span>$0.00</span></div>
                </div>
            </div>
            <div class="offcanvas__logo">
                <a href="./index.php"><img src="img/logo.png" alt=""></a>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
        <!-- Offcanvas Menu End -->

        <!-- Header Section Begin -->
        <header class="header">
            <div class="header__top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header__top__inner">
                                <div class="header__top__left">

                                    <div class="header__top__left">
                                        <ul>
                                            <li><a href="login.php"><?php include './nombre-usuario.php'; ?></a> <span class="arrow_carrot-down"></span>
                                                <ul>
                                                    <div><a href="logout.php"><li>Salir</li></a></div>
                                                </ul>
                                            </li>
                                            <li><a href="./catalogoEng.php">English</a></li>
                                        </ul>
                                    </div>


                                </div>
                                <div class="header__logo">
                                    <a href="./index.php"><img src="img/logo.png" alt=""></a>
                                </div>
                                <div class="header__top__right">
                                    <div class="header__top__right__links">
                                        <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                                        <a href="#" ><img src="img/icon/heart.png" alt=""></a>
                                    </div>
                                    <div class="header__top__right__cart">
                                        <a href="#" data-toggle="modal" data-target="#exampleModal"><img src="img/icon/cart.png" alt="" > <?php
                                            include ("./contadorCarrito.php");
                                            ?></a>
                                        <div class="cart__price">Carrito: <?php
                                            include ("./contadorPresio.php");
                                            ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="canvas__open"><i class="fa fa-bars"></i></div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li><a href="./index.php">Inicio</a></li>
                                <li><a href="./about.php">Acerca de</a></li>
                                <li class="active"><a href="./catalogo.php?pagina=1">Tienda</a></li>
                                <li><a href="./blog.php">¡Crea tu propio pastel!</a></li>
                                <li><a href="./contact.php">Contactanos</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Section End -->

        <!-- Breadcrumb Begin -->
        <div class="breadcrumb-option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="breadcrumb__text">
                            <h2>Tienda</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="breadcrumb__links">
                            <?php
                            include ("./conexion/ocultarGestion.php");
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Shop Section Begin -->
        <section class="shop spad">
            <div class="container">
                <div class="shop__option">
                    <div class="row">
                        <div class="col-lg-7 col-md-7">
                            <div class="shop__option__search">
                                <style>
                                    .filtro{
                                        display: none;
                                    }
                                </style>
                                <form>
                                    <input type="text" placeholder="Search" name="buscador" id="buscador">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <?php
                    $inc = include("./conexion/conexion.php");
                    if (!$_GET) {
                        echo "<script>
                            window.location.href = './catalogo.php?pagina=1';
                              </script>";
                    }
                    if ($inc) {
                        $aja1 = "SELECT COUNT(pastel_id) FROM pastel_n";
                        $pdo = mysqli_query($conn, $aja1);
                        if ($pdo) {
                            while ($rowi = $pdo->fetch_array()) {
                                $aja2 = $rowi['COUNT(pastel_id)'];
                            }
                        }
                        $consulta = "SELECT * FROM pastel_n";
                        $resultado = mysqli_query($conn, $consulta);
                        if ($resultado) {
                            while ($row = $resultado->fetch_array()) {
                                $articulos_x_pagina = 8;
                                $smn = $aja2 / $articulos_x_pagina;
                                $paginas = ceil($smn);
                            }
                        }

                        if ($_GET['pagina'] > $paginas || $_GET['pagina'] <= 0) {
                            echo "<script>
                            window.location.href = './catalogo.php?pagina=1';
                              </script>";
                        }
                        $iniciar = ($_GET['pagina'] - 1) * $articulos_x_pagina;
                        $hey = strval($iniciar);
                        $sql = "SELECT * FROM pastel_n LIMIT " . $hey . ",8";
                        $resul = mysqli_query($conn, $sql);
                        if ($resul) {
                            while ($row = $resul->fetch_array()) {
                                $id = $row['pastel_id'];
                                $nombre = $row['nombre'];
                                $precio = $row['precio'];
                                ?>

                                <div class="col-lg-3 col-md-6 col-sm-6 buscar">
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
                        $aja1 = "SELECT COUNT(pastel_id) FROM pastel_n";
                        $pdo = mysqli_query($conn, $aja1);
                        if ($pdo) {
                            while ($rowi = $pdo->fetch_array()) {
                                $aja2 = $rowi['COUNT(pastel_id)'];
                            }
                        }
                    }
                    ?>


                </div>
                <div class="shop__last__option">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="shop__pagination">
                                <?php
                                for ($i = 0;
                                        $i < $paginas;
                                        $i++):
                                    ?>
                                    <a href="catalogo.php?pagina=<?php echo $i + 1 ?>"><?php echo $i + 1 ?></a>
                                <?php endfor ?>
                                <a href="catalogo.php?pagina=<?php echo$_GET['pagina'] + 1 ?>" ><span class="arrow_carrot-right"></span></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="shop__last__text">
                                <p>Mostrando 8 elementos de <?php echo $aja2; ?> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Shop Section End -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Articulos en carrito</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Tabla de agregar al carrito -->
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Producto</th>
                                                <th>Precio</th>
                                                <th>Cantidad</th>
                                            </tr>
                                            <?php
                                            include ("./mostrarCart.php");
                                            ?>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">

                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-6 d-flex justify-content-center">

                                                                <button type="button" class="btn btn-secondary center-block" data-dismiss="modal">Cerrar</button>
                                                            </div>
                                                            <div class="col-md-6 d-flex justify-content-cente">

                                                                <div class="cart_delete">
                                                                    <a onclick="mostrar()" class="btn btn-primary center-block" style="color: white;">Vaciar carrito</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <br><br><br>
                                                        <div> 
                                                            <div id="paypal-button-container"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       <!-- Footer Section Begin -->
            <footer class="footer set-bg" data-setbg="img/footer-bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="footer__widget">
                                <h6>Horario</h6>
                                <ul>
                                    <li>Lunes - Viernes: 08:00 am – 08:30 pm</li>
                                    <li>Sabado: 10:00 am – 16:30 pm</li>
                                    <li>Domingo: 10:00 am – 16:30 pm</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="footer__about">
                                <div class="footer__logo">
                                    <a href="#"><img src="img/footer-logo.png" alt=""></a>
                                </div>

                                <div class="footer__social">
                                    <a href="https://www.facebook.com/Sweet-Cream-109388668488078"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <p class="copyright__text text-white"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | <a target="_blank">Universidad Tecnológica de Tecámac</a>

                                </p>
                            </div>
                            <div class="col-lg-5">
                                <div class="copyright__widget">
                                    <ul>


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer Section End -->

        <!-- Search Begin -->
        <div class="search-model">
            <div class="h-100 d-flex align-items-center justify-content-center">
                <div class="search-close-switch">+</div>
                <form class="search-model-form">
                    <input type="text" id="search-input" placeholder="Search here.....">
                </form>
            </div>
        </div>
        <!-- Search End -->

        <!-- Js Plugins -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/jquery.barfiller.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery.slicknav.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/confirmacion_1.js"></script>
        <script src="js/search.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://www.paypal.com/sdk/js?client-id=AdzEdUHZ41GJGmqaaQEq6W12NepCvy1--2chuk-VyJcP-vlGzWXIzA1j31lEwTBRPtqw3hy7Dscl2IrT&currency=MXN"></script>
        <script>
                                        paypal.Buttons({
                                            // Sets up the transaction when a payment button is clicked
                                            createOrder: (data, actions) => {
                                                return actions.order.create({
                                                    purchase_units: [{
                                                            amount: {
                                                                value: <?php echo $presio; ?>  // Can also reference a variable or function
                                                            }
                                                        }]
                                                });
                                            },
                                            // Finalize the transaction after payer approval
                                            onApprove: (data, actions) => {
                                                return actions.order.capture().then(function (orderData) {
                                                    // Successful capture! For dev/demo purposes:
                                                    console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                                                    const transaction = orderData.purchase_units[0].payments.captures[0];
                                                    //alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
                                                    // When ready to go live, remove the alert and show a success message within this page. For example:
                                                    // const element = document.getElementById('paypal-button-container');
                                                    // element.innerHTML = '<h3>Thank you for your payment!</h3>';
                                                    // Or go to another URL:  actions.redirect('thank_you.html');
                                                    
                                                    Swal.fire({
                                                        position: 'center',
                                                        icon: 'success',
                                                        title: 'Pagado con éxito!',
                                                        showConfirmButton: true,
                                                    }).then((result) => {
                                                        if (result.isConfirmed) {

                                                            location.href = "./generarPedido.php";
                                                        }
                                                    })
                                                });
                                            }
                                        }).render('#paypal-button-container');
        </script>
    </body>

</html>