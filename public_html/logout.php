<?php

session_start();

if (isset($_SESSION['email'])) {
    echo 'Existe Sesion';
    session_destroy();
    echo "<script>
                        
                        window.location.href='./login.php';
                        </script>";
} else {
    echo "<script>
                        alert('No existe una sesion iniciada');
                        window.location.href='./login.php';
                        </script>";
}
?>
