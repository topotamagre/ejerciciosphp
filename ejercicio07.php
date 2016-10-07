<!--Ejercicio7.php y Rectangulo.php
Crea una clase rectángulo con dos atributos. Base y altura.
Debe incluir los métodos:
-constructor
-perímetro
-superficie
-añade también los getters y setters
En el fichero EJercicio7 debes crear un ejemplar de la clase anterior
y usar los métodos disponibles. La variedad de pruebas a gusto del alumno.-->

 <?php
//Probando los métodos mágicos
class Rectangulo
{
    private $_base; 
    private $_altura;

    function __construct($base, $altura)   //así los públicos
    {
        echo "Construyendo nuevo Rectangulo <hr> ";
        $this->_base = $base;
        $this->_altura = $altura;
    }//construct

    function perimetro()
    {
        return 2*($this->_base + $this->_altura);
    }//funcion perimetro

    function superficie()
    {
        return ($this->_base * $this->_altura);
    }//funcion superficie


    function __toString()
    {
        return "Rectangulo de $this->_base x $this->_altura ";
    }

    function __destruct()
    {
        echo "<hr> adios";
    }

}//class Rectangulo

$prueba = new Rectangulo('5','6');

echo $prueba;

unset($prueba);

echo "<hr> fin"; 