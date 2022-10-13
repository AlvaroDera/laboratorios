<?php
    session_start();
?>

<!DOCTYPE html>
<html xmlns="http=//www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <title> Laboratorio 12.1 </title>
</head>
<body>
    <h1> Manejo de Sesiones </h1>
    <h2> Paso 1: se crea la variable de sesion y se almacena </h2>

    <?php
    
    $var = "Ejemplo Sesion";
    $_SESSION['var'] = $var;
    print ("<p> Valor de la variable de sesion: $var</p>\n");    
    
    ?>
    <a href="lab122.php"> Paso 2 </a>
</body>
</html>