<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html">
    <title>laboratorio 2.10</title>
</head>
<body>
    <?php
        $persona = array (
            array( "nombre" => "Rosa", "estructura" => 168, "sexo" => "F"),
            array( "nombre" => "Ignacio", "estructura" => 175, "sexo" => "M"),
            array( "nombre" => "Daniel", "estructura" => 172, "sexo" => "M"),
            array( "nombre" => "Ruben", "estructura" => 182, "sexo" => "M"),
        );

        echo "<b>Datos sobre el personal<b><br><hr>";

        $numPersonas = count($persona);

        for ($i = 0; $i < $numPersonas; $i++) {
            echo "Nombre: <b>", $persona[$i]['nombre'], "</b><br>";
            echo "Estructura: <b>", $persona[$i]['estructura'], " cm</b><br>";
            echo "Sexo: <b>", $persona[$i]['sexo'], "</b><br><hr>";
        }
    ?>
</body>
</html>