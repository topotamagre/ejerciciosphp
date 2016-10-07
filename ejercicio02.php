<!DOCTYPE html>
<html>
	<head>
	    <meta charset="UTF-8">
	    <title>ejemplo 6</title>
	</head>
	<body>
		<?php
		//inicializamos
		echo "BASKET 5 POSICIONES- ARRAYS ASOCIATIVOS<hr>";
		$array1 = array ("Pedro:base", "Julian:pivot", "JuanCarlos:ala", 
			"Gasol:ala-pivot", "Marc:escolta");


		//foreach clave->elemento
		echo "Recorrido mediante bucle foreach equipo basket->elemento <br><br>";
		foreach ($array1 as $position=>$element){
		    echo $element . '<br>';
		}
		?>
	</body>
</html>