<?php 
$long = $_POST['num'];
if ($long % 2 != 0)
{
	echo ("Solo numeros pares");
?>
<title> Laboratorio 8.2 </title>
<form method='post' action='lab86.html'>
	<input type='submit' name='' value='Regresar'>
</form>
<?php
}
else
{
	 include('class82.php'); 
	 $matriz = new Matriz($long); 
	 $resul=$matriz->generar_matriz();
}
?>
<title> Laboratorio 8.2 </title>
<form method='post' action='lab86.html'>
	<input type='submit' name='' value='Inicio'>
</form>