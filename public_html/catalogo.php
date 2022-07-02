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
                                <li class="active"><a href="./catalogo.php">Tienda</a></li>
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
                            <a href="./gestionpastel.php">Gestionar</a>
                            <span>Tienda</span>
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
                                <form action="#">
                                    <select>
                                        <option value="">Categories</option>
                                        <option value="">Red Velvet</option>
                                        <option value="">Cup Cake</option>
                                        <option value="">Biscuit</option>
                                    </select>
                                    <input type="text" placeholder="Search">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5">
                            <div class="shop__option__right">
                                <select>
                                    <option value="">Default sorting</option>
                                    <option value="">A to Z</option>
                                    <option value="">1 - 8</option>
                                    <option value="">Name</option>
                                </select>
                                <a href="#"><i class="fa fa-list"></i></a>
                                <a href="#"><i class="fa fa-reorder"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <?php
                    include ("./conexion/mostrar.php");
                    ?>

                </div>
                <div class="shop__last__option">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="shop__pagination">
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#"><span class="arrow_carrot-right"></span></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="shop__last__text">
                                <p>Showing 1-9 of 10 results</p>
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
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <div class="cart_delete">
                                <a href="./eliminarPastel_1.php" class="btn btn-primary">Vaciar carrito</a>
                            </div>
                            <button type="button" class="btn btn-success">Pagar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Section Begin -->
        <footer class="footer set-bg" data-setbg="img/footer-bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="footer__widget">
                            <h6>Horario</h6>
                            <ul>
                                <li>Lunes - Viernes: 08:00 am – 08:30 pm</li>
                                <li>Sabado: 10:00 am – 16:30 pm</li>
                                <li>Domingo: 10:00 am – 16:30 pm</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
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
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="footer__newslatter">
                            <h6>Entérate de nuestras Promociones</h6>
                            <p>Recibe promociones exclusivas y noticias sobre lanzamientos de nuevos productos</p>
                            <form action="#">
                                <input type="text" placeholder="Correo Electronico">
                                <button type="submit"><i class="fa fa-send-o"></i></button>
                            </form>
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
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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
    </body>

</html>