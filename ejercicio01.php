script llamado ej 01- cree un array con 5 elementos - inicializarlo 
 <!DOCTYPE html>
<html><head>
        <meta charset="UTF-8">
        <title>Ejercicio 01 - PHP</title>
</head><body>
<?php
//inicializamos
echo "En este array vamos a mostrar los distintos nombres <hr>";
$array1[]="Carlos";
$array1[]="Oscar";
$array1[3]="Pedro";
$array1[]="Rafael";
$array1[6]="Sara";


foreach ( $array1 as $nombre ){
	echo '<tr></tr>' . $nombre;

}

var_dump($array1);

?>
</body></html>