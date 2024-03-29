<header>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</header>
<?php
include './SED.php';
$inc = include("./conexion/conexion.php");
$correo = $_POST['email'];
$consulta = "SELECT * FROM usuarios WHERE email='$correo'";

$resultado = mysqli_query($conn, $consulta);

$consulta = $resultado->fetch_array();
if (!empty($consulta)) {
    $claveE = SED::decryption($consulta['password']);
    $paracorreo = $correo;
    $titulo = "Recuperación de contraseña";
    $mensaje = "Tu contraseña es: .$claveE";
    
    $tuccoreo = "From: SweetCream16@outlook.es";
    echo "<script>
        Swal.fire({
            icon: 'success',
            title: '¡Correo enviado!',
            text: '¡Verifica tu contraseña en tu correo!'
          }).then((result) => {
        if (result.isConfirmed) {
            location.href = './login.php';
        }
    })
        </script>";
    mail($paracorreo, $titulo, $mensaje, $tuccoreo);
}else {
    echo "<script>
        Swal.fire({
            icon: 'error',
            title: '¡El correo no existe!',
            text: '¡Verifica tu correo e intentalo de nuevo!'
          }).then((result) => {
        if (result.isConfirmed) {
            window.history.go(-1);
        }
    })
        </script>";
}
?>

<!doctype html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>LOGIN</title>
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
            <div class="h2 text-center" >Contraseña enviada a tu correo</div>
            <div class="h4 text-muted text-center pt-2"><?php echo 'Correo enviado satisfactoriamente a ' . $_POST['email'];?></div>
            <form method="post" class="pt-3" action="login.php">
<!--                <div class="text-center pt-3 text-muted"><span><a href="login.php">Inicia Sesion</a></span></div>-->
                <button class="btn btn-block text-center my-3" type="submit">Iniciar Sesion</button>
            </form>
            </div>
    </body>
</html>
