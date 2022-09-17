<?php
    $porcentaje = $_POST['porcentaje'];
    if ($porcentaje >= 80 or $porcentaje == 100 ) {
        echo "<img src='img/verde.jpg' alt='error'>";
    }
    elseif ($porcentaje >= 50 or $porcentaje == 79 ) {
        echo "<img src='img/amarillo.jpg' alt='error'>";
    }
    elseif ($porcentaje <= 49 or $porcentaje >= 1){
        echo "<img src='img/rojo.jpg' alt='error'>";
    }
?>