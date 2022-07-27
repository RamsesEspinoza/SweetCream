
<!DOCTYPE html>
<html lang="zxx">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Cake Template">
        <meta name="keywords" content="Cake, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Crear pastel</title>

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
              rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
              rel="stylesheet">

        <!-- Css Styles -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/resoluciones.css" type="text/css">
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/flaticon.css" type="text/css">
        <link rel="stylesheet" href="css/barfiller.css" type="text/css">
        <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
        <link rel="stylesheet" href="css/nice-select.css" type="text/css">
        <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
        <link rel="stylesheet" href="css/complementos.css" type="text/css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


        <style>
            .botonComp{
                background-color: gray;
                color: white;
                
            }
        </style>

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
                    <div class="cart__price">Carrito: <span>$0.00</span></div>
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
                                            <li><a href="./blogEng.php">English</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="header__logo">
                                    <a href="./index.php"><img src="img/logo.png" alt=""></a>
                                </div>
                                <div class="header__top__right">
                                    <div class="header__top__right__links">
                                        <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                                        <a href="#"><img src="img/icon/heart.png" alt=""></a>
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
                                <li><a href="./catalogo.php">Tienda</a></li>
                                <li class="active"><a href="./blog.php">¡Crea tu propio pastel!</a></li>
                                <li><a href="./contact.php">Contactanos</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Section End -->      

        <!--nuevo pastel -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row" >

                        <h3 class="text-center" style="padding-top: 25px; padding-bottom: 30px" >
                            Presiona sobre la base o capa para cambiarlos
                        </h3>



                        <div class="col-md-9">


                            <div class="pasteles">


                                <div class="border m-4 position-relative " style="height: 100%; width: 90%; left: 5%; z-index: 0">

                                    <div class="carousel slide position-absolute top-50 start-50 translate-middle w-100" id="carousel-279847" style="z-index: 1;">

                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" alt="Carousel Bootstrap First" src="img/crearPastel/img_tapa1.png" />

                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" alt="Carousel Bootstrap Second" src="img/crearPastel/img_tapa2.png" />

                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" alt="Carousel Bootstrap Third" src="img/crearPastel/img_tapa3.png" />

                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" alt="Carousel Bootstrap Second" src="img/crearPastel/img_tapa4.png" />

                                            </div>
                                        </div> <a class="carousel-control-prev" href="#carousel-279847" data-slide="prev" style=" max-height:25%; margin-top:0%; left: -10%" data-bs-interval="false" data-interval="false"><span class="carousel-control-prev-icon "></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-279847" data-slide="next" style="max-height:25%; margin-top:0%; right: -10%;" data-bs-interval="false" data-interval="false"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
                                    </div>



                                    <div class="carousel slide position-absolute top-50 start-50 translate-middle w-100" id="carousel-40513">
                                        <ol class="carousel-indicators">
                                            <li data-slide-to="0" data-target="#carousel-40513" class="active">
                                            </li>
                                            <li data-slide-to="1" data-target="#carousel-40513">
                                            </li>
                                            <li data-slide-to="2" data-target="#carousel-40513">
                                            </li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="d-block w-100" alt="Carousel Bootstrap First" src="img/crearPastel/img_base.png" />

                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" alt="Carousel Bootstrap Second" src="img/crearPastel/img_base2.png" />

                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" alt="Carousel Bootstrap Third" src="img/crearPastel/img_base3.png" />

                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" alt="Carousel Bootstrap Second" src="img/crearPastel/img_base4.png" />

                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" alt="Carousel Bootstrap Third" src="img/crearPastel/img_base5.png" />

                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" alt="Carousel Bootstrap Third" src="img/crearPastel/img_base6.png" />

                                            </div>

                                        </div > <a class="carousel-control-prev " href="#carousel-40513" data-slide="prev" data-bs-interval="false" data-interval="false" style="top: 50%; max-height:25%; margin-top:0%; left: -10%;"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-40513" data-slide="next" style="top: 50%;  max-height:25%; margin-top:0%; right: -10%;" data-bs-interval="false" data-interval="false"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
                                    </div>






                                    <img class="position-absolute top-50 start-50 translate-middle w-100" src="img/crearPastel/comp.png" id="fresas" style="z-index: 2; visibility: hidden"/>
                                    <img class="position-absolute top-50 start-50 translate-middle w-100" src="img/crearPastel/comp2.png" id="fram" style="z-index: 2; visibility: hidden"/>
                                    <img class="position-absolute top-50 start-50 translate-middle w-100" src="img/crearPastel/comp3.png" id="uvas" style="z-index: 2; visibility: hidden"/>








                                </div>
                            </div>
                        </div>

                        <div class="col-md-3" style="min-height: 700px">
                            <h3 class="text-center">
                                Complementos

                            </h3>
                            <br>
                            <!-- Complementos y añadidos -->

                            <div class="row">

                                <div class="col-md-12">
                                    <div class="container">

                                        <div class="row align-items-start">
                                            <div class="col">
                                                <div class="switch">
                                                    <input class="" type="checkbox" id="btnUvas" style="left: 20%">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label class="form-check-label h2" for="flexSwitchCheckDefault"> Uvas </label>
                                            </div>     
                                        </div>
                                    </div>
                                </div>
                                <!--
                                                               <button type="button" class="btn btn-lg btn-outline-warning active" id="btnfresas" onclick="mostrarFresas(this)"   value="Ocultar">
                                                               Fresas
                                                               </button>
                                -->


                            </div>

                            <br><!-- comment -->

                            <div class="row">

                                <div class="col-md-12 ">
                                    <div class="container">

                                        <div class="row align-items-start">
                                            <div class="col">
                                                <div class="switch">
                                                    <input class="" type="checkbox" id="btnFram" style="left: 20%">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label class="form-check-label h2" for="flexSwitchCheckDefault"> Frambuesas </label>
                                            </div>     
                                        </div>
                                    </div>
                                </div>
                                <!--
                                                               <button type="button" class="btn btn-lg btn-outline-warning active" id="btnfresas" onclick="mostrarFresas(this)"   value="Ocultar">
                                                               Fresas
                                                               </button>
                                -->


                            </div>
                            <br>

                            <div class="row">

                                <div class="col-md-12">
                                    <div class="container">

                                        <div class="row align-items-start">
                                            <div class="col">
                                                <div class="switch">
                                                    <input class="" type="checkbox" id="btnfresas" style="left: 20%">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label class="form-check-label h2 " for="flexSwitchCheckDefault"> Fresas </label>
                                            </div>     
                                        </div>
                                    </div>
                                </div>
                                <!--
                                                               <button type="button" class="btn btn-lg btn-outline-warning active" id="btnfresas" onclick="mostrarFresas(this)"   value="Ocultar">
                                                               Fresas
                                                               </button>
                                -->


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- pastel nuevo fin -->


        <!-- pastel viejo 
        <div class="crearpastel">
                <div class="container-fluid">
                     <div class="row">
                             <div class="col-md-12">
                                 <div class="capa1">
                                     <div class="carousel slide" id="carousel-847845">
                                             <ol class="carousel-indicators">
                                                     <li data-slide-to="0" data-target="#carousel-847845" class="active">
                                                     </li>
                                                     <li data-slide-to="1" data-target="#carousel-847845">
                                                     </li>
                                                     <li data-slide-to="2" data-target="#carousel-847845">
                                                     </li>
                                             </ol>
                                             <div class="carousel-inner">
                                                     <div class="carousel-item active">
                                                             <img class="d-block w-100" alt="Carousel Bootstrap First" src="img/capas/ch_cho.png" />
                                                     </div>
                                                     <div class="carousel-item">
                                                             <img class="d-block w-100" alt="Carousel Bootstrap Second" src="img/capas/ch_fre.jpeg" />
                                                     </div>
                                                     <div class="carousel-item">
                                                             <img class="d-block w-100" alt="Carousel Bootstrap Third" src="img/capas/ch_vai.jpeg" />
    
                                                     </div>
                                             </div> <a class="carousel-control-prev" href="#carousel-847845" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-847845" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
                                     </div>
                                </div>
                                 
                                <div class="capa2">
                                    
                                     <div class="carousel slide" id="carousel-414528">
                                             <ol class="carousel-indicators">
                                                     <li data-slide-to="0" data-target="#carousel-414528" class="active">
                                                     </li>
                                                     <li data-slide-to="1" data-target="#carousel-414528">
                                                     </li>
                                                     <li data-slide-to="2" data-target="#carousel-414528">
                                                     </li>
                                             </ol>
                                             <div class="carousel-inner">
                                                     <div class="carousel-item active">
                                                             <img class="d-block w-100" alt="Carousel Bootstrap First" src="img/capas/med_cho.png" />
                                                             <div class="carousel-caption">
                                                         </div>
                                                     </div>
                                                     <div class="carousel-item">
                                                             <img class="d-block w-100" alt="Carousel Bootstrap Second" src="https://www.layoutit.com/img/sports-q-c-1600-500-2.jpg" />
                                                             <div class="carousel-caption">
                                                                     <h4>
                                                                             Second Thumbnail label
                                                                     </h4>
                                                                     <p>
                                                                             Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                                                     </p>
                                                             </div>
                                                     </div>
                                                     <div class="carousel-item">
                                                             <img class="d-block w-100" alt="Carousel Bootstrap Third" src="https://www.layoutit.com/img/sports-q-c-1600-500-3.jpg" />
                                                             <div class="carousel-caption">
                                                                     <h4>
                                                                             Third Thumbnail label
                                                                     </h4>
                                                                     <p>
                                                                             Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                                                     </p>
                                                             </div>
                                                     </div>
                                             </div> <a class="carousel-control-prev" href="#carousel-414528" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-414528" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
                                     </div>
                                    </div>
                                    <div class="capa3">
                                        
                                     <div class="carousel slide" id="carousel-208079">
                                             <ol class="carousel-indicators">
                                                     <li data-slide-to="0" data-target="#carousel-208079" class="active">
                                                     </li>
                                                     <li data-slide-to="1" data-target="#carousel-208079">
                                                     </li>
                                                     <li data-slide-to="2" data-target="#carousel-208079">
                                                     </li>
                                             </ol>
                                             <div class="carousel-inner">
                                                     <div class="carousel-item active">
                                                             <img class="d-block w-100" alt="Carousel Bootstrap First" src="img/capas/gra_cho.png" />
                                                             <div class="carousel-caption">
    
                                                             </div>
                                                     </div>
                                                     <div class="carousel-item">
                                                             <img class="d-block w-100" alt="Carousel Bootstrap Second" src="https://www.layoutit.com/img/sports-q-c-1600-500-2.jpg" />
                                                             <div class="carousel-caption">
                                                                     <h4>
                                                                             Second Thumbnail label
                                                                     </h4>
                                                                     <p>
                                                                             Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                                                     </p>
                                                             </div>
                                                     </div>
                                                     <div class="carousel-item">
                                                             <img class="d-block w-100" alt="Carousel Bootstrap Third" src="https://www.layoutit.com/img/sports-q-c-1600-500-3.jpg" />
                                                             <div class="carousel-caption">
                                                                     <h4>
                                                                             Third Thumbnail label
                                                                     </h4>
                                                                     <p>
                                                                             Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                                                     </p>
                                                             </div>
                                                     </div>
                                             </div> <a class="carousel-control-prev" href="#carousel-208079" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-208079" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
                                     </div> 
                                        <div class="botonestiloenviar">
                                                <button type="button" class="btn btn-block btn-lg btn-outline-success">
                                                     Enviar
                                                </button>
                                        </div>
                                </div>
                                     
                                </div>
                        </div>
                </div>
        </div>
        <!-- Breadcrumb End -->



        <!-- Footer Section Begin -->
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
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                        <div class="col-lg-5">
                            <div class="copyright__widget">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->

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
                                                                    <a href="./eliminarPastel_1.php" class="btn btn-primary center-block">Vaciar carrito</a>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="js/mostar.js"></script>
        <script src="js/confirmacion_1.js"></script>
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
                                                alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
                                                // When ready to go live, remove the alert and show a success message within this page. For example:
                                                // const element = document.getElementById('paypal-button-container');
                                                // element.innerHTML = '<h3>Thank you for your payment!</h3>';
                                                // Or go to another URL:  actions.redirect('thank_you.html');
                                            });
                                        }
                                    }).render('#paypal-button-container');
        </script>

    </body>

</html>