<?php
class Matriz 
	{  
		protected $long;  
		function __construct($l)
		{  
			$this->long = $l;  
		
		} 
 
		function generar_matriz()
		{  
			for ($fila=1; $fila <= $this->long; $fila++)
			{
				for ($columna=1; $columna <= $this->long; $columna++)
				{
					if ($fila==$columna)
					{
						echo $matrix= 1; 
					}
					else
					{
						echo $matrix= 0;
					}
				}
					echo "<br>";
			} 
		}
	}
?>