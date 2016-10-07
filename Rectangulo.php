<?php
require_once 'Rectangulo.php';

$rectangulo = new Rectangulo(20,12);

echo $rectangulo;
echo '<br>';
echo "Su superficie es " . $rectangulo->superficie();
echo '<br>';
echo "Su superficie es {$rectangulo->superficie()}";
echo '<br>';
$perimetro = $rectangulo->perimetro();
echo "Su perimetro es" .  $perimetro;