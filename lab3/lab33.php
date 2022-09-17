<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> laboratorio 3.3 </title>
</head>
<body>
    <?php
    if(array_key_exists('enviar', $_POST)) {
        if ($_REQUEST['Apellido'] != "" )
        {
            echo "El apellido ingresado es : $_REQUEST[Apellido]";
        }
        else
        {
            echo "Favor coloque el apellido";
        }

        echo "<br>";

        if ($_REQUEST['nombre'] != "" )
        {
            echo "El nombre ingresado es : $_REQUEST[nombre]";
        }
        else
        {
            echo "Favor coloque el nombre";
        }
    }
    else{
        ?>
        <form action = "lab33.php" method = "post">
            nombre: <input type = "text" name="nombre"><br>
            apellido: <input type = "text" name="apellido"><br>
            <input type = "submit" name="enviar" value="Enviar datos">
    </form>
    <?php    
    }
    ?>
</body>
</html>