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



<html>
    <head>
        <title>Login</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="css/sesion_style.css" type="text/css">
    </head>
    <body>

        <header>
            <a href="/php-login">¡Bienvenido a Sweet Cream!</a>
        </header>

        <h1>Inicia Sesion</h1>        
        <span>o <a href="signup.php">Crea una Cuenta</a></span>

        <form  method="post">
            <input type="text" name="email" placeholder="Ingresa tu correo electronico">
            <input type="password" name="password" placeholder="Ingresa tu contraseña">
            <input type="submit" value="Ingresar"></form>

        <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">


    </body>
</html>
