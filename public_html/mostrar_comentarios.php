<?php
$inc = include("./conexion/conexion.php");

$consulta = "SELECT * FROM comentarios";
$resultado = mysqli_query($conn, $consulta);
if ($resultado) {
    while ($row = $resultado->fetch_array()) {
        $estrellas = $row['calificacion'];
        ?>
        <div class="col-lg-6">
            <div class="testimonial__item">
                <div class="testimonial__author">
                    
                    <div class="testimonial__author__text">
                        <h5><?php echo $row['nombre_com']; ?></h5>
                        <span><?php echo $row['comentario']; ?></span>
                    </div>
                </div>
                <div class="rating">
                    <?php
                    for ($i = 0; $i < $estrellas; $i++):
                        ?>
                    <span class="icon_star"></span>
                    <?php endfor ?>

                </div>

            </div>
        </div>


        <?php
    }
}
?>