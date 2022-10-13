<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title> Laboratorio 12.3 </title>
</head>
<body>
    <h1> Manejo de Sesiones </h1>
    <h2> Paso 3: la variable ya ha sido destruida y su valor se ha perdido </h2>
    <?php
        if(isset($_SESSION['var'])) {
            $var = $_SESSION['var'];
        }
        else { ////
            $var = "";
        }
        print ("<p> Valor de la variable de sesion: $var </p>\n");
        session_destroy();
    ?>
    <a href='lab121.php'> Volver al Paso 1 </a>

</body>
</html>