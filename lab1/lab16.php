<!DOCTYPE html>
<html lang="en">
<head>
    <title>laboratorio 1.6</title>
</head>
<body>
    <?php
    define ('TAM', 4); # El 4 define el tama;o de la tabla
    function potencia ($v1, $v2)
    {
        $rdo= pow($v1, $v2); #Pow devuelve el valor elevado a la potencia
        return $rdo;
    }
    echo "<table border=1>"; #Grosor del borde de la tabla
    for ($n1=1; $n1<=TAM; $n1++) #Variable, condicion, incremento
    {
        echo "<tr>";
        for ($n2=1; $n2<=TAM; $n2++)
        echo "<td>". potencia($n1,$n2). "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>