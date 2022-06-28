<?php
session_start();
$inc = include("./conexion/conexion.php");

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: index.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!empty($_POST['email']) && !empty($_POST['password'])) {

        $correo = "";
        $contra = "";
        $password = $_POST['password'];

        $ema = "SELECT email,password FROM usuarios WHERE email=?";
        $stmt = mysqli_prepare($conn, $ema);
        mysqli_stmt_bind_param($stmt, "s", $_POST['email']);

        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_store_result($stmt);

            if (mysqli_stmt_num_rows($stmt) == 1) {
                mysqli_stmt_bind_result($stmt, $correo, $contra);
                if (mysqli_stmt_fetch($stmt)) {
                    //$hash = password_hash($password, PASSWORD_DEFAULT, array("cost" => 10));
                    if ($password == $contra) {
                        session_start();

                        // Store data in session variables
                        $_SESSION["loggedin"] = true;
                        $_SESSION["email"] = $correo;
                        header("location: index.php");
                    } else {
                        echo "<script>
                            alert('Contraseña Incorrecta!!!');
                            window.location.href='./login.php';
                            </script>";
                    }
                }
            } else {
                echo "<script>
                        alert('Correo No Encontrado!!!');
                        window.location.href='./login.php';
                        </script>";
            }
        } else {
            echo "<script>
                        alert('Contraseña Incorrecta!!!');
                        window.location.href='./login.php';
                        </script>";
        }
    } else {
        echo "<script>
                        alert('Ingresa un Correo o una Contraseña Valida!!!');
                        window.location.href='./login.php';
                        </script>";
    }
}
?>



<!doctype html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>SweetCream Entrar o Registrarse</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
        <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
        <script type='text/javascript' src=''></script>
        <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
        <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
        <link rel="stylesheet" href="css/EstiloLogin.css"/>
    </head>
    <body oncontextmenu='return false' class='snippet-body'>
        <div class="wrapper bg-white">
            <div class="h2 text-center" >Sweet Cream</div>
            <div class="h4 text-muted text-center pt-2">Ingresa tu Correo y Contreseña</div>
            <form method="post" class="pt-3">
                <div class="form-group py-2">
                    <div class="input-field"> 
                        <span class="far fa-user p-2"></span> 
                        <input type="text" name="email" placeholder="Ingresa tu correo electronico">
                    </div>
                </div>
                <div class="form-group py-1 pb-2">
                    <div class="input-field"> 
                        <span class="fas fa-lock p-2"></span> 
                        <input type="password" name="password" placeholder="Ingresa tu contraseña">
                    </div>
                </div>
                <div class="d-flex align-items-start">
                    <!--<div class="remember"> 
                        <label class="option text-muted"> Recuerdame <input type="radio" name="radio"> 
                            <span class="checkmark"></span> 
                        </label> 
                    </div>-->
                </div> 
                <div class="text-center pt-3 text-muted"><a href="#" id="forgot">Olvidaste tu contraseña?</a></div>
                <button class="btn btn-block text-center my-3" type="submit" value="Ingresar">Iniciar Sesion</button>
                <div class="text-center pt-3 text-muted">No tienes Cuenta? <a href="signup.php">Registrate</a></div>
                <div class="text-center pt-3 text-muted"><span><a href="index.php">Revisar sin Iniciar Sesion</a></span></div>
            </form>
        </div>
        <script type='text/javascript'></script>
    </body>
</html>

















<!--<html>
<!-- Css Styles 
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

<head>
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<!-- Css Styles 
<link rel="stylesheet" href="css/EstiloLogin.css" type="text/css">
</head>
<body>

<header>
    <a href="index.php">¡Bienvenido a Sweet Cream!</a>
</header>

<h1>Inicia Sesion</h1>        
<span>o <a href="signup.php">Crea una Cuenta</a></span>

<form  method="post">
    <input type="text" name="email" placeholder="Ingresa tu correo electronico">
    <input type="password" name="password" placeholder="Ingresa tu contraseña">
    <input type="submit" value="Ingresar">
</form>

<div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">


</body>
</html>-->
