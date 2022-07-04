<!DOCTYPE html>
<html lang="zxx">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Cake Template">
        <meta name="keywords" content="Cake, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>About</title>

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
                <div class="offcanvas__option">

                </div>
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
                                                <li><a href="./about.php">Español</a></li>
                                                </li>
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
                                    <li  class="active"><a href="./aboutEng.php">About</a></li>
                                    <li><a href="./catalogoEng.php">Store</a></li>
                                    <li><a href="./blogEng.php">Create your own cake!</a></li>
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
                    <div class="hero__item set-bg" data-setbg="img/hero/acerca3.jpg">
                        <div class="container">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-8">
                                    <div align="center">
                                        <h1><font color="#FFFFFF"><b>About us</b></font></h1>
                                        <h1><font color="#000000"><b>and our story</b> </font></h1>
                                        <h5>ㅤ</h5><h5>ㅤ</h5><h5>ㅤ</h5><h5>ㅤ</h5><h5>ㅤ</h5><h5>ㅤ</h5><h5>ㅤ</h5><h5>ㅤ</h5><h5>ㅤ</h5><h5>ㅤ</h5><h5>ㅤ</h5>                              <h5>ㅤ</h5> 
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Hero Section End -->

            <!-- About Section Begin -->
            <section class="about spad">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="about__video set-bg" data-setbg="img/video.jpg">
                                <a href="https://www.youtube.com/watch?v=8PJ3_p7VqHw&list=RD8PJ3_p7VqHw&start_radio=1"
                                   class="play-btn video-popup"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="about__text">
                                <div class="section-title">
                                    <span>About our bakery</span>
                                    <h2>The best of us for your best moments</h2>
                                </div>
                                <p>Despite the fact that our business can be considered a micro company, that does not mean a lack of experience, with more than 5 years in the market and with many smiles spread, you can count on us if you need any service.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="about__bar">
                                <div class="about__bar__item">
                                    <p>Cake design</p>
                                    <div id="bar1" class="barfiller">
                                        <div class="tipWrap"><span class="tip"></span></div>
                                        <span class="fill" data-percentage="60"></span>
                                    </div>
                                </div>
                                <div class="about__bar__item">
                                    <p>Delivery time</p>
                                    <div id="bar2" class="barfiller">
                                        <div class="tipWrap"><span class="tip"></span></div>
                                        <span class="fill" data-percentage="70"></span>
                                    </div>
                                </div>
                                <div class="about__bar__item">
                                    <p>Overall satisfaction</p>
                                    <div id="bar3" class="barfiller">
                                        <div class="tipWrap"><span class="tip"></span></div>
                                        <span class="fill" data-percentage="80"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Section End -->

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
            <!-- Blog Section Begin -->
            <section class="blog spad">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog__item">
                                <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-1.jpg">

                                </div>
                                <div class="blog__item__text">
                                    <h2>Beginnings</h2>
                                    <p>Es común escuchar a los docentes decir en sus conversaciones cotidianas: “ahora todo es copiar y pegar”, “Internet no deja pensar”, “los jóvenes ya no saben lo que es un libro”, “le puse cero en el trabajo por plagio”, entre otras frases relacionadas con el popular “copiar y pegar” que actualmente domina las instituciones educativas, en especial las de educación superior, teniendo en cuenta que en ellas la exigencia de trabajos escritos es constante. Ya sea un resumen, un ensayo o un proyecto de investigación, Internet se ha convertido en la panacea del estudiante moderno para salir bien librado de todo texto que le sea solicitado. Muy remotas quedaron ya aquellas tardes completas en la biblioteca, luchas por obtener el único ejemplar de algún libro, o los rimeros de fotocopias, piensan algunos profesores con nostalgia.</p>

                                </div>
                            </div>

                            <div class="blog__item">
                                <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-2.jpg">

                                </div>
                                <div class="blog__item__text">
                                    <h2>Inspiration and motivations</h2>
                                    <p>Es común escuchar a los docentes decir en sus conversaciones cotidianas: “ahora todo es copiar y pegar”, “Internet no deja pensar”, “los jóvenes ya no saben lo que es un libro”, “le puse cero en el trabajo por plagio”, entre otras frases relacionadas con el popular “copiar y pegar” que actualmente domina las instituciones educativas, en especial las de educación superior, teniendo en cuenta que en ellas la exigencia de trabajos escritos es constante. Ya sea un resumen, un ensayo o un proyecto de investigación, Internet se ha convertido en la panacea del estudiante moderno para salir bien librado de todo texto que le sea solicitado. Muy remotas quedaron ya aquellas tardes completas en la biblioteca, luchas por obtener el único ejemplar de algún libro, o los rimeros de fotocopias, piensan algunos profesores con nostalgia.</p>

                                </div>
                            </div>

                            <div class="blog__item">
                                <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-3.jpg">

                                </div>
                                <div class="blog__item__text">
                                    <h2>Principles and values</h2>
                                    <p>Es común escuchar a los docentes decir en sus conversaciones cotidianas: “ahora todo es copiar y pegar”, “Internet no deja pensar”, “los jóvenes ya no saben lo que es un libro”, “le puse cero en el trabajo por plagio”, entre otras frases relacionadas con el popular “copiar y pegar” que actualmente domina las instituciones educativas, en especial las de educación superior, teniendo en cuenta que en ellas la exigencia de trabajos escritos es constante. Ya sea un resumen, un ensayo o un proyecto de investigación, Internet se ha convertido en la panacea del estudiante moderno para salir bien librado de todo texto que le sea solicitado. Muy remotas quedaron ya aquellas tardes completas en la biblioteca, luchas por obtener el único ejemplar de algún libro, o los rimeros de fotocopias, piensan algunos profesores con nostalgia.</p>

                                </div>
                            </div>

                            <div class="blog__item">
                                <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-4.jpg">

                                </div>
                                <div class="blog__item__text">
                                    <h2>Future vision</h2>
                                    <p>Es común escuchar a los docentes decir en sus conversaciones cotidianas: “ahora todo es copiar y pegar”, “Internet no deja pensar”, “los jóvenes ya no saben lo que es un libro”, “le puse cero en el trabajo por plagio”, entre otras frases relacionadas con el popular “copiar y pegar” que actualmente domina las instituciones educativas, en especial las de educación superior, teniendo en cuenta que en ellas la exigencia de trabajos escritos es constante. Ya sea un resumen, un ensayo o un proyecto de investigación, Internet se ha convertido en la panacea del estudiante moderno para salir bien librado de todo texto que le sea solicitado. Muy remotas quedaron ya aquellas tardes completas en la biblioteca, luchas por obtener el único ejemplar de algún libro, o los rimeros de fotocopias, piensan algunos profesores con nostalgia.</p>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- Blog Section End -->

            <!-- Team Section Begin -->
            <section class="team spad">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-7">
                            <div class="section-title">
                                <span>Our work team</span>
                                <h2>Sweet Cream </h2>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="team__item set-bg" data-setbg="img/team/team-1.jpg">
                                <div class="team__item__text">
                                    <h6>Carlos Alvares</h6>
                                    <span>Decorator</span>
                                    <div class="team__item__social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="team__item set-bg" data-setbg="img/team/team-2.jpg">
                                <div class="team__item__text">
                                    <h6>Maria Bravo</h6>
                                    <span>Pastry chef</span>
                                    <div class="team__item__social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- Team Section End -->

        </section>


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

                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-6 d-flex justify-content-center">

                                                                <button type="button" class="btn btn-secondary center-block" data-dismiss="modal">Close</button>
                                                            </div>
                                                            <div class="col-md-6 d-flex justify-content-cente">

                                                                <div class="cart_delete">
                                                                    <a href="./eliminarPastel_1.php" class="btn btn-primary center-block">Clean cart</a>
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
        <script src="js/arriba.js"></script>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="https://kit.fontawesome.com/bdc40e9dda.js" crossorigin="anonymous"></script>
        <script src="//code.tidio.co/g1tvhizsol7n37h46ewx14mqs1fy14tl.js" async></script>
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
