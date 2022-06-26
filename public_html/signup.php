<?php
    
    $inc = include("./conexion/conexion.php");
    
  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO usuarios (email, password,nombre) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn,$sql);
    //$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "sss", $_POST['email'],$_POST['password'],$_POST['nombre']);

    if (mysqli_stmt_execute($stmt)) {
        
      header("location: login.php");
    } else {
      echo "Error";
    }
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
            <div class="h2 text-center" >¡Bienvenido a Sweet Cream!</div>
            <div class="h4 text-muted text-center pt-2">Registrate</div>
            
            <form method="post" class="pt-3">
                <div class="form-group py-2">
                    <div class="input-field"> 
                        <span class="far fa-user p-2"></span> 
                        <input type="text" name="nombre" placeholder="Ingresa tu Nombre">
                    </div>
                </div>
                <div class="form-group py-2">
                    <div class="input-field"> 
                        <span class="far fa-address-card p-2"></span> 
                        <input type="text" name="email" placeholder="Ingresa tu correo electronico">
                    </div>
                </div>
                <div class="form-group py-2">
                    <div class="input-field"> 
                        <span class="far fa-eye p-2"></span> 
                        <input type="password" name="password" placeholder="Ingresa tu contraseña">
                    </div>
                </div>
                <div class="form-group py-2">
                    <div class="input-field"> 
                        <span class="far fa-eye-slash p-2"></span> 
                        <input type="password" name="confirm_password" placeholder="Confirma tu contraseña">
                    </div>
                </div>
                <button class="btn btn-block text-center my-3" type="submit" value="Registrarme">Registrarme</button>
                <div class="text-center pt-3 text-muted"><span>o <br><a href="login.php">Inicia Sesion</a></span></div>
                
                
            </form>
        </div>
    </body>
</html>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <!--<body>
        <header>
            <a href="/php-login">¡Bienvenido a Sweet Cream!</a>
        </header>
        
        
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="css/sesion_style.css" type="text/css">
        
        <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
        
        <h1>Registrate</h1>
        <span>o <a href="login.php">Inicia Sesion</a></span>
        
        <form  method="post">
        
        <input type="text" name="nombre" placeholder="Ingresa tu Nombre">
    <input type="text" name="email" placeholder="Ingresa tu correo electronico">
    <input type="password" name="password" placeholder="Ingresa tu contraseña">
    <input type="password" name="confirm_password" placeholder="Confirma tu contraseña">
    <input type="submit" value="Registrarme"> </form>
        

    </body>
</html>-->
