<!DOCTYPE html>
<html lang="en">
<head>
    <title>laboratorio 2.3</title>
</head>
<body>
    <center>
        <?php
            print ("<ul>\n"); #uL para crear listas no ordenadas
            $i=1; #comienzo de la lista
            while ($i <= 5) #Cantidad de elementos en la lista
            {
                print ("<li>Elemento $i</li>\n"); #li para declarar los elementos de la lista
                $i++;
            }
            print ("</ul>\n");
        ?>
    </center>
    
</body>
</html>