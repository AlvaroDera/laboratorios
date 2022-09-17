<!DOCTYPE html>
<html lang="en">
<head>
    <title>laboratorio 1.4</title>
</head>
<body>
    <?php
    echo "<table border=1>"; #Grosor del borde de la tabla
    $n=1;
    for ($n1=1; $n1<=10; $n1++) #Variable, condicion, incremento (Cantidad de Filas)
    {
        echo "<tr>"; #Table Row, ordenar filas
        for ($n2=1; $n2<=10; $n2++) #Cantidad de Columnas
        {
            echo "<td>", $n, "</td>";
            $n=$n+1; # Conteo de 1 en 1
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>