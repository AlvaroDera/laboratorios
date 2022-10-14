<?php
    if(array_key_exists('enviar', $_POST)) {
        $expire=time() + 60 * 5;
        setcookie("user", $_REQUEST['visitante'], $expire);
        header("Refresh:0");
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title> Laboratorio 13.2 </title>
</head>
<body>
    <h1> Creacion de Cookies </h1>
    <h2> La Cookie "User" tendra solo 5 minutos de duracion </h2>
    
    <?php
        if(isset($_COOKIE["user"])) {
            print("<br/> Hola <b>".$_COOKIE["user"]."</b> gracias por visitar nuestro sitio web<br/>");
        } else {
            ?>
            <form name="formcookie" method="post" action="lab142.php">
                <br/> Hola, primera vez que te vemos en nustro sitio web ¿Como te llamas?
                <input type="text" name="visitante">
                <input name="enviar" value="Gracias por identificarte"  type="submit" /><br/>
            <?php
        }
    ?>
<br/><a href="lab133.php">Continuar...</a>
</body>
</html>