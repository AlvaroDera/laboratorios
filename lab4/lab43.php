<?php

echo "Arreglos y sus Pocisiones:";
print_r('<br>');

$valores = Array(
12,
3,
11,
4,
15,
6,
20,
7,
5,
19,
10,
17,
14,
2,
16,
18,
13,
9,
1,
8
);

$valor =  max($valores);
$indice =  array_search($valor, $valores);
echo "En la posicion ".$indice.", el valor mayor es ".$valor;
for ($i=0; $i < count($valores); $i++) { 
    print_r('<br>');
    print_r($valores[$i]);
}
?>