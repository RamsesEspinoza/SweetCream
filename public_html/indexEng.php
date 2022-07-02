<!DOCTYPE html>
<html lang="zxx">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Cake Template">
        <meta name="keywords" content="Cake, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <!-- 
        
        <<form action="post" action="conexion/login.php"> 
        
        Este de aca es la ruta donde se ejecutara la conexion y la consulta
        COMENTARIO bRAYAN_EmmanuelSO
        -->


        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Home</title>
        <!-- segunda version -->
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
        <link rel="stylesheet" href="css/flecha.css"/>
        <link rel="stylesheet" href="css/fonts.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>
        <!-- Page Preloder -->
        <div id="preloder">
            <div class="loader"></div>
        </div>

        <span class="ir-arriba fa-solid fa-circle-up"></span> 



        <section class="contenido"> 

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
                                            <li><a href="./index.php">Español</a></li>
                                                
                                           
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
                                    <li  class="active"><a href="eng/indexEng.php">Home</a></li>
                                    <li><a href="./aboutEng.php">About</a></li>
                                    <li><a href="./catalogoEng.php">Store</a></li>
                                    <li> <a href="./blogEng.php">Create your own cake!</a></li>
                                    <li><a href="./contactEng.php">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Header Section End -->

            <!-- Hero Section Begin -->
            <section class="hero">
                <div class="hero__slider owl-carousel">
                    <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
                        <div class="container">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <div class="hero__text">
                                        <div class="row">
                                            <i class="fa-solid fa-quote-left"></i>
                                            <h3 class="quote"></h3>
                                        </div>
                                        <i class="fa-solid fa-quote-right float-right" ></i> 
                                        <h5>ㅤ</h5>
                                        <p class="author"></p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
                        <div class="container">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <div class="hero__text">
                                        <h1>Offer!</h1>
                                        <h5>ㅤ</h5>
                                        <h5>With each cake you buy you get 2 number candles for free<br></h5>  
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
                        <div class="container">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <div class="hero__text">
                                        <h2>Weekday hours</h2>
                                        <h5>ㅤ</h5>
                                        <h4>Monday to Friday from 8:00 AM to 8:30 PM<br></h4>
                                        <h5>ㅤ</h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Hero Section End -->



            <!-- Testimonial Section Begin -->
            <section class="testimonial spad">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="section-title">
                                <span>Reviews</span>
                                <h2>from some of our clients</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="testimonial__slider owl-carousel">
                            <div class="col-lg-6">
                                <div class="testimonial__item">
                                    <div class="testimonial__author">
                                        <div class="testimonial__author__pic">
                                            <img src="img/testimonial/ta-1.jpg" alt="">
                                        </div>
                                        <div class="testimonial__author__text">
                                            <h5>Ramses Espinosa</h5>
                                            <span>Técamac</span>
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <span class="icon_star"></span>
                                        <span class="icon_star"></span>
                                        <span class="icon_star"></span>
                                        <span class="icon_star"></span>
                                        <span class="icon_star"></span>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="testimonial__item">
                                    <div class="testimonial__author">
                                        <div class="testimonial__author__pic">
                                            <img src="img/testimonial/ta-2.jpg" alt="">
                                        </div>
                                        <div class="testimonial__author__text">
                                            <h5>Brayan Saldivar</h5>
                                            <span>Ecatepec</span>
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <span class="icon_star"></span>
                                        <span class="icon_star"></span>
                                        <span class="icon_star"></span>
                                        <span class="icon_star"></span>
                                        <span class="icon_star-half_alt"></span>
                                    </div>

                                </div>
                            </div><div class="col-lg-6">
                                <div class="testimonial__item">
                                    <div class="testimonial__author">
                                        <div class="testimonial__author__pic">
                                            <img src="img/testimonial/ta-3.jpg" alt="">
                                        </div>
                                        <div class="testimonial__author__text">
                                            <h5>Emmanuel Salas</h5>
                                            <span>Técamac</span>
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <span class="icon_star"></span>
                                        <span class="icon_star"></span>
                                        <span class="icon_star"></span>
                                        <span class="icon_star"></span>
                                        <span class="icon_star"></span>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="testimonial__item">
                                    <div class="testimonial__author">
                                        <div class="testimonial__author__pic">
                                            <img src="img/testimonial/ta-4.jpg" alt="">
                                        </div>
                                        <div class="testimonial__author__text">
                                            <h5>Irving García</h5>
                                            <span>Zumpango</span>
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <span class="icon_star"></span>
                                        <span class="icon_star"></span>
                                        <span class="icon_star"></span>
                                        <span class="icon_star"></span>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Testimonial Section End -->

            <!-- Instagram Section Begin -->
            <section class="instagram spad">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 p-0">
                            <div class="instagram__text">
                                <div class="section-title">
                                    <span>Follow us on Instagram</span>
                                    <h2>Sweet moments are kept as memories.</h2>
                                </div>
                                <h5><i class="fa fa-instagram"></i> @sweetcreamEng</h5>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                    <div class="instagram__pic">
                                        <img src="img/instagram/instagram-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                    <div class="instagram__pic middle__pic">
                                        <img src="img/instagram/instagram-2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                    <div class="instagram__pic">
                                        <img src="img/instagram/instagram-3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                    <div class="instagram__pic">
                                        <img src="img/instagram/instagram-4.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                    <div class="instagram__pic middle__pic">
                                        <img src="img/instagram/instagram-5.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                    <div class="instagram__pic">
                                        <img src="img/instagram/instagram-6.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Instagram Section End -->

            <!-- Map Begin -->
            <div class="map">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-7">
                            <div class="map__inner">
                                <h6>Zumpango De Ocampo, Edo de México</h6>
                                <ul>
                                    <li>Paseos del lago, Logo Buenos Aires</li>
                                    <li>sweetcream@gmail.com</li>
                                    <li>+52 55 8016 4789</li> 
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="map__iframe">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d885.8537985223709!2d-99.05543898112668!3d19.792611703822818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d18dca93a63d7d%3A0xf1e5fb9e3fe0f2e2!2sPapeleria%20Y%20Cyber%20Akedaicar!5e0!3m2!1ses-419!2smx!4v1654050546146!5m2!1ses-419!2smx" height="300" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
            <!-- Map End -->

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

        </section>

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
        <script src="js/arriba.js"></script>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="https://kit.fontawesome.com/bdc40e9dda.js" crossorigin="anonymous"></script>
        <script src="//code.tidio.co/g1tvhizsol7n37h46ewx14mqs1fy14tl.js" async></script>
        <script src="js/frases.js"></script>
        <script src="js/confirmacionEng.js"></script>

    </body>

</html>