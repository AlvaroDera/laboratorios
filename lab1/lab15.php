<!DOCTYPE html>
<html>
<head>
    <title>laboratorio 1.5</title>
</head>
<body>
    <?php
    define ('TAM', 10); #Define el tama;o de letra
    echo "<table border=1>"; #Grosor de el borde de la tabla
    $n=1;
    for ($n1=1; $n1<=TAM; $n1++)
    {
        if ($n1 % 2 == 0) #para intercalar el color en las filas
        echo "<tr bgcolor=#bdc3d6>"; #Para dar color a las filas
        else
        echo "<tr>";
        for ($n2=1; $n2<=TAM; $n2++)
        {
            echo "<td>", $n, "</td>";
            $n=$n+1;
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>