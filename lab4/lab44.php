<?php
$numero = $_POST['num'];
$TAM = $numero - 1;
if ($numero%2==0) {
        for ($i=0; $i <= $TAM; $i++) {
            if ($numero%2==0) {
                echo $numero;
            }
        }
}else{
    $message = "Este numero no es valido, introduzca un numero par.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("lab44.html");
}

?>
<br>
<center>
<a href="lab44.html"><button type="button">Atras</button></a>
</center>