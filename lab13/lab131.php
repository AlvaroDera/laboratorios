<?php
    if(isset($_COOKIE['contador'])){
        setcookie('contador', $_COOKIE['contador'] + 1, time() + 365 * 24 * 60 * 60);
        $mensaje = 'Gracias por visitarnos. Numero de visita: ' . $_COOKIE['contador'];
    } else {
        //Caduca en un año
        setcookie('contador', 1, time() + 365 * 24 * 60 * 60);
        $mensaje = 'Bienvenido a nuestro sitio web';
    }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title> Laboratorio 13.1 </title>
</head>
<body>
    <h1> Contador de visitas con Cookies </h1>
    <p><h3> <?php echo $mensaje; ?> </h3></p>
</body>
</html>