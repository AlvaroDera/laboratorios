<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>laboratorio 2.7</title>
</head>
<body>
    <?php
    $posicion = "arriba";

    switch($posicion) {
        case "arriba": #bloque 1
            echo "La variable contiene";
            echo " el valor arriba";
            break;
        case "abajo": #bloque 2
            echo "la variable contiene";
            echo " el valor abajo";
            break;
        default: #bloque 3
            echo "la variable contiene otro valor";
            echo " distinto de arriba y abajo";
    }
    ?>
</body>
</html>