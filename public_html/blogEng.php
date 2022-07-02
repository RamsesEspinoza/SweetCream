
<!DOCTYPE html>
<html lang="zxx">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Cake Template">
        <meta name="keywords" content="Cake, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Maker</title>

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
                display: block
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
                    <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
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
                                            <li><a href="login.php"><?php include './nombre-usuarioEng.php'; ?></a> <span class="arrow_carrot-down"></span>
                                                <ul>
                                                    <div><a href="logout.php"><li>Log out</li></a></div>
                                                </ul>
                                            </li>
                                            <li><a href="./blog.php">Español</a></li>
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
                                        <div class="cart__price">Cart: <?php
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
                                <li><a href="./indexEng.php">Home</a></li>
                                <li><a href="./aboutEng.php">About</a></li>
                                <li><a href="./catalogoEng.php">Store</a></li>
                                <li class="active"><a href="./blogEng.php">Create your own cake!</a></li>
                                <li><a href="./contactEng.php">Contact</a></li>
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
                            Press on the base or layer to change them
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
                                                <label class="form-check-label h2" for="flexSwitchCheckDefault"> Grapes </label>
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
                                                <label class="form-check-label h2" for="flexSwitchCheckDefault"> Raspberries </label>
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
                                                <label class="form-check-label h2 " for="flexSwitchCheckDefault"> Strawberries </label>
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



        <!-- Footer Section Begin -->
            <footer class="footer set-bg" data-setbg="img/footer-bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="footer__widget">
                                <h6>Service hours</h6>
                                <ul>
                                    <li>Monday - Friday: 08:00 a.m. – 08:30 p.m.</li>
                                    <li>Saturday: 10:00 am - 16:30 pm</li>
                                    <li>Sunday: 10:00 am – 16:30 pm</li>
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
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a target="_blank">Universidad Tecnológica de Tecámac</a>

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
<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Items in cart</h5>
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
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Amount</th>
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
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <div class="cart_delete">
                            <a href="./eliminarCarritoENG.php" class="btn btn-primary">Clean cart</a>
                        </div>
                        <button type="button" class="btn btn-success">Pay</button>
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
        <script src="js/confirmacionEng.js"></script>
    </body>

</html>