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
            <div class="h2 text-center" >Recuperar Contraseña</div>
            <div class="h4 text-muted text-center pt-2">Te enviaremos un correo para que puedas restablecer tu contraseña</div>
            
            <form method="post" class="pt-3" action="enviar.php">
                <div class="form-group py-2">
                    <div class="input-field"> 
                        <span class="far fa-eye p-2"></span> 
                        <input type="email" name="email" placeholder="Ingresa tu correo electronico">
                    </div>
                </div>
<!--                <div class="form-group py-2">
                    <div class="input-field"> 
                        <span class="far fa-eye p-2"></span> 
                        <input type="text" name="hola" placeholder="Ingresa un mensaje">
                    </div>
                </div>-->
                <button class="btn btn-block text-center my-3" type="submit" value="Cambiar" >Enviar Correo</button>
                <div class="text-center pt-3 text-muted"><span>o <br><a href="login.php">Inicia Sesion</a></span></div>
            </form>
        </div>
    </body>
</html>