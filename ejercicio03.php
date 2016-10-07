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
		$array1 = array (
			'base' => array ("Pedro", "Julian"),
			'escolta' => array ("Pepe", "Jorge"),
			'alero' => array ("Suso", "Oscar"),
			'ala-pivot' => array ("Carlos", "Julian"),
			'pivot' => array ("Jose", "Pedrito"),
			);


		//foreach clave->elemento
		echo "Recorrido mediante bucle foreach equipo basket->elemento <br><br>";
		foreach ($array1 as $position=>$element){
		    echo $position . '<br>';
		}
		?>
	</body>
</html>