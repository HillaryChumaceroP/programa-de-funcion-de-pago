<?php
	class Operacion2
	{
		
		public function CalcularPasaje($pa, $ca)
		{
			$total = $pa * $ca;

			echo "<br>";
			echo "<div style= 'margin-right: 30%; margin-left: 30%; background: #E7D434'><h1>El pasaje es : </h1><h1>". $total."</h1></div>";
		}
	}
?>