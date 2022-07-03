<?php
mail("SweetCream16@outlook.es", "Asunto", "Prueba", "Encabezado");
?>


<?php
include ('./conexion/conexion.php');

$correo = $_POST['email'];

$queryusuario = mysqli_query($conn,"SELECT * FROM usuarios WHERE email'$correo'");
$nr = mysqli_num_rows($queryusuario);
if($nr == 1){
    $mostrar = mysqli_fetch_array($queryusuario);
    $enviarpass = $mostrar['password'];

    $paracorreo = $correo;
    $titulo = "Recuperación de contraseña";
    $mensaje = "Tu contraseña es: " .$enviarpass;
    $tuccoreo = "From: SweetCream16@outlook.es";
    
    mail($paracorreo, $titulo, $mensaje, $tuccoreo);
}
?>


<?php
try {
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $pass = substr(md5(microtime()), 1, 10);
        $mail = $_POST['email'];

        //Conexion con la base
        $conn = include ('./conexion/conexion.php');
        // Check connection
        if ($conn) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "Update usuario Set password='$pass' Where correo='$mail'";

        if ($conn->query($sql) === TRUE) {
            echo "usuario modificado correctamente ";
        } else {
            echo "Error modificando: " . $conn->error;
        }

        $to = $_POST['email']; //"destinatario@email.com";
        $from = "From: " . "SweetCream";
        $subject = "Recordar contraseña";
        $message = "El sistema le asigno la siguiente clave " . $pass;

        mail($to, $subject, $message, $from);
        echo 'Correo enviado satisfactoriamente a ' . $_POST['email'];
    } else
        echo 'Informacion incompleta';
} catch (Exception $e) {
    echo 'Excepción capturada: ', $e->getMessage(), "\n";
}
?>