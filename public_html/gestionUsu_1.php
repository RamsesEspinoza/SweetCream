<?php
session_start();
$inc = include("./conexion/conexion.php");
    if (isset($_SESSION["email"])) {
        $correoV = $_SESSION["email"];
        $consulta = "SELECT * FROM usuarios WHERE email='$correoV'";
        $resultado = mysqli_query($conn, $consulta);
        if ($resultado) {
            while ($row = $resultado->fetch_array()) {
                $nombre = $row['tipo_usuario'];
                $tipo = intval($nombre);
                if($tipo == 2){
                    ?>
                <!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cake Template">
    <meta name="keywords" content="Cake, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cake | Template</title>

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

<body onload="listo()">
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <script>
    function listo() {
        Swal.fire({
                     position: 'center',
                     icon: 'success',
                     title: 'Actualizado con exito',
                     showConfirmButton: true,
                    }).then((result) => {
        if (result.isConfirmed) {
           
            location.href = "./gestionUsu.php";
        }
    })
}
    </script>
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

    <header class="header">
            <div class="header__top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header__top__inner">
                                <div class="header__top__left">

                                    <div class="header__top__left">
                                        <ul>
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
                        <h2 onclick="listo()">Gestion de Usuarios</h2>
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
                <table class="table">
                <tr>
                    <td>Nombre</td>
                    <td>Email</td>
                    <td><div title="1 - Usuario normal, 2 - Administrador">Tipo de usuario</div></td>
                    <td>ㅤㅤㅤㅤ</td>
                    <td>ㅤㅤㅤㅤ</td>
                </tr>
                     <?php
        include ("./conexion/mostrarGestionUsu.php");
        ?>
               </table>
            </div>
            <?php
                    $inc = include("./conexion/conexion.php");
                    if (!$_GET) {
                        echo "<script>
                          
                              </script>";
                    }
                    if ($inc) {
                       $aja1 = "SELECT COUNT(id_usa) FROM usuarios";
                        $pdo = mysqli_query($conn, $aja1);
                        if ($pdo) {
                            while ($rowi = $pdo->fetch_array()) {
                                $aja2 = $rowi['COUNT(id_usa)'];
                            }
                        }
                        $consulta = "SELECT * FROM usuarios";
                        $resultado = mysqli_query($conn, $consulta);
                        if ($resultado) {
                            while ($row = $resultado->fetch_array()) {
                                $articulos_x_pagina = 5;
                                $smn = $aja2 / $articulos_x_pagina;
                                $paginas = ceil($smn);  
                            }
                        } 
                        
                        if ($_GET['pagina'] > $paginas || $_GET['pagina'] <= 0) {
                            echo "<script>
                            
                              </script>";
                        }
                        $iniciar = ($_GET['pagina'] - 1) * $articulos_x_pagina;
                        $hey = strval($iniciar);
                        $aja1 = "SELECT COUNT(id_usa) FROM usuarios";
                        $pdo = mysqli_query($conn, $aja1);
                        if ($pdo) {
                            while ($rowi = $pdo->fetch_array()) {
                                $aja2 = $rowi['COUNT(id_usa)'];
                            }
                        }
                    }
                    ?>


          
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
                                <p>Mostrando 5 elementos de <?php echo $aja2; ?> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- Shop Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer set-bg" data-setbg="img/footer-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>WORKING HOURS</h6>
                        <ul>
                            <li>Monday - Friday: 08:00 am – 08:30 pm</li>
                            <li>Saturday: 10:00 am – 16:30 pm</li>
                            <li>Sunday: 10:00 am – 16:30 pm</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <p>Lorem ipsum dolor amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore dolore magna aliqua.</p>
                        <div class="footer__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__newslatter">
                        <h6>Subscribe</h6>
                        <p>Get latest updates and offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Email">
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
                          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                      </p>
                  </div>
                  <div class="col-lg-5">
                    <div class="copyright__widget">
                        <ul>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Site Map</a></li>
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
<script src="js/eliminarUsu.js"></script>
<script src="js/search.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
                <?php
                }else{
                    echo "<script>
         window.location.href = './catalogo.php';
           </script>";
                }
            }
        }
    } else {
        echo "<script>
         window.location.href = './catalogo.php';
           </script>";
}
