<?php
include('class83.php');
$num = $_POST['num'];
$max=max($num);
$mayor = new Mayor($num,$max);
$resul=$mayor->mostrar_mayor();

?>