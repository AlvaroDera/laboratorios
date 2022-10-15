<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title> Desconectar </title>
</head>
<body>
    <?php
        if(isset($_SESSION["usuario_valido"])) {
            session_destroy();
            print ("<br><br><p align='center'> Conexion Finalizada </p>\n");
            print ("<p align='center'> [ <a href='login.php'> Conectar </a> ] </p>\n");
        } else {
            print ("<br><br>\n");
            print ("<p align='center'> No existe una conexion activa </p>\n");
            print ("<p align='center'> [ <a href='login.php'> Conectar </a> ] </p>\n");
        }
    ?>
</body>
</html>