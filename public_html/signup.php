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

<html>
    <head>
        <title>Registrate</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="css/sesion_style.css" type="text/css">

    </head>
    <body>
        
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
</html>
