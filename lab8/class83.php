<?php
	class Mayor 
	{  
		protected $num; 
		protected $mayor;
		function __construct($n,$m)
		{  
			$this->num = $n;
			$this->mayor = $m;
		} 
		function mostrar_mayor()
		{  
			 foreach ($this->num as $indice => $numero)
			{
				if ($numero == $this->mayor)
				{
					echo ("el numero mayor introducido es el $numero y esta en la casilla $indice");
				}
			}
		} 
	}
?>