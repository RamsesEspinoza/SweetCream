<header>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</header>
<?php
session_start();
$inc = include("./conexion/conexion.php");
if (isset($_SESSION["email"])) {
    $correo = $_SESSION["email"];
    if (isset($_POST["txtnombre"])) {
        $query = 'INSERT INTO comentarios (comentario, email_com, nombre_com, calificacion)
            VALUES(\'' . $_POST["txtmensaje"] . '\',\'' . $correo . '\',
                \'' . $_POST["txtnombre"] . '\',\'' . $_POST["txtcalificacion"] . '\')';
        $result = mysqli_query($conn, $query) or die(mysqli_error());
        if ($result) {
            echo "<script>
        Swal.fire({
            icon: 'success',
            title: 'Listo',
            text: '¡Gracias por tus comentarios!'
          }).then((result) => {
        if (result.isConfirmed) {
           
            window.location.href = './index.php';
        }
    })
         </script>";
        }
    }
} else {
    echo "<script>
         window.location.href = './login.php';
         </script>";
}
?>