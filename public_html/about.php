<!DOCTYPE html>
<html lang="zxx">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Cake Template">
        <meta name="keywords" content="Cake, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Acerca de</title>

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
                        <a href="#" data-toggle="modal" data-target="#exampleModal"><img src="img/icon/cart.png" alt="" > <span>0</span></a>
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
                                            <div class="header__top__left">
                                                <ul>
                                                    <li><a href="login.php"><?php include './nombre-usuario.php'; ?></a> <span class="arrow_carrot-down"></span>
                                                        <ul>
                                                            <div> <a href="logout.php"><li>Salir</li></a></div>
                                                        </ul>
                                                        <li><a href="./aboutEng.php">English</a></li>
                                                    </li>
                                                </ul>
                                            </div>
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
                                    <li class="active"><a href="./about.php">Acerca de</a></li>
                                    <li><a href="./catalogo.php">Tienda</a></li>
                                    <li><a href="./blog.php">¡Crea tu propio pastel!</a></li>
                                    <li><a href="./contact.php">Contáctanos</a></li>
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
                                        <h1><font color="#FFFFFF"><b>Sobre nosotros</b></font></h1>
                                        <h1><font color="#000000"><b>y nuestra historia</b> </font></h1>
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
                                    <span>Sobre nuestra pasteleria</span>
                                    <h2>Lo mejor de nosotros para tus mejores momentos</h2>
                                </div>
                                <p>A pesar de que nuestro negocio pueda considerarse una micro empresa eso no sígnica falta de experiencia, contando con más de 5 años en el mercado y con muchas sonrisas repartidas puedes contar con nosotros si necesitas algún servicio</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="about__bar">
                                <div class="about__bar__item">
                                    <p>Diseño de pasteles</p>
                                    <div id="bar1" class="barfiller">
                                        <div class="tipWrap"><span class="tip"></span></div>
                                        <span class="fill" data-percentage="60"></span>
                                    </div>
                                </div>
                                <div class="about__bar__item">
                                    <p>Tiempo de entrega</p>
                                    <div id="bar2" class="barfiller">
                                        <div class="tipWrap"><span class="tip"></span></div>
                                        <span class="fill" data-percentage="70"></span>
                                    </div>
                                </div>
                                <div class="about__bar__item">
                                    <p>Satisfacción general</p>
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

            <section class="testimonial spad">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="section-title">
                                <span>Reseñas</span>
                                <h2>de algunos de nuestros clientes</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="testimonial__slider owl-carousel">
                            
                            <?php
                            include ("./mostrar_comentarios.php");
                            ?>

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
                                    <h2>Misión</h2>
                                    <p>Crear productos con excelencia, limpieza e innovación en el campo de la repostería adaptándonos a las necesidades para la satisfacción del cliente creando momentos inigualables al igual que nuestros productos.</p>

                                </div>
                            </div>

                            <div class="blog__item">
                                <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-2.jpg">

                                </div>
                                <div class="blog__item__text">
                                    <h2>Visión</h2>
                                    <p>Que nuestra marca sea reconocida a nivel local y al rededor gracias a nuestro trabajo conformado por excelencia, creatividad y buen trato a nuestros clientes, llegando así a generar valor no solo material sino emocional en nuestros clientes.</p>

                                </div>
                            </div>

                            <div class="blog__item">
                                <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-3.jpg">

                                </div>
                                <div class="blog__item__text">
                                    <h2>Historia</h2>
                                    <p>Sweet Cream tiene sus orígenes en un pueblo llamado Amanalco ubicado en el Estado de México, pueblo donde a través del conocimiento familiar transmitido a uno de sus fundadores la señora Alma Lilia Bravo Basurto en el año 2001 se crea una pequeña repostería que fue ganando impacto en el negocio local por sus productos y buen trato al cliente, lo que desencadeno en un nicho de clientes el cual era cada vez más grande y fiel a la marca en ese entonces aun ausente.</p>

                                </div>
                            </div>

                            <div class="blog__item">
                                <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-4.jpg">

                                </div>
                                <div class="blog__item__text">
                                    <h2>Retorno</h2>
                                    <p>Sin embargo, por problemas de salud y por lo consiguiente económicos se tuvo que cerrar en el año 2007 la primera repostería, pero esto no paro el entusiasmo y dedicación a nuestros productos es así que en el año 2016 se da origen a un nuevo comercio en la venta de productos de repostería. Ahora con su segundo fundador el señor Carlos Moisés Álvarez Bravo con el cual se abre el panorama a nuevos sabores en nuestros productos para generar una diversidad en nuestros productos llamando así la atención de nuevos clientes ahora en la localidad de Zumpango Estado de México generando de nuevo un pequeño pero fiel nicho de clientes el cual destaca nuestra marca no solo por su inigualable sabor sino por la creación de lazos estrechos , generando así momentos inigualables con nuestros productos.  “productos que endulzan más que el paladar, endulzando la vida”</p>

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
                                <span>Nuestro equipo de trabajo</span>
                                <h2>Sweet Cream </h2>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="team__item set-bg" data-setbg="img/team/team-1.jpg">
                                <div class="team__item__text">
                                    <h6>Carlos Alvares</h6>
                                    <span>Decorador</span>
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
                                    <span>Repostera</span>
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
                                <h6>Horario</h6>
                                <ul>
                                    <li>Lunes - Viernes: 08:00 am – 08:30 pm</li>
                                    <li>Sábado: 10:00 am – 16:30 pm</li>
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
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Contacto <a target="_blank">Devloop@gmail.com</a>

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
<!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Artículos en carrito</h5>
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
                            <div class="row">
                                <div class="col-md-12">
                                    <label style="border-collapse: collapse; width: 100%;text-align:center">¡Contáctanos para pedidos especiales!</label>
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
        <script src="js/confirmacion_1.js"></script>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="https://kit.fontawesome.com/bdc40e9dda.js" crossorigin="anonymous"></script>
        <script src="//code.tidio.co/g1tvhizsol7n37h46ewx14mqs1fy14tl.js" async></script>
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
