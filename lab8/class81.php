<?php
		class Factorial 
	{  
		protected $numero; 
		public $i;
		protected $factorial;
 
		function __construct($num,$i,$f)
		{  
			$this->numero = $num;  
			$this->i = $i;
			$this->factorial = $f;
		} 
 
		function calc_factorial()
		{  
			while ($this->i <= $this->numero)
			{
		
				$this->factorial = $this->i*$this->factorial;
		
				$this->i = $this->i+1;
			}
				return $this->factorial;
		}
	}		
?>