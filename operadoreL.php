<?php

$gasto_mayor= TRUE;
$gastos_menor= FALSE;
$gastos_debitados= TRUE;
$gastos_iva= FALSE;

var_dump($gastos_debitados and $gastos_menor);
echo "\n";

var_dump($gastos_iva || $gasto_mayor);
echo "\n";

//operador espacial
//-1: Si el primer valor es menor que el segundo.
//0: Si ambos valores son iguales.
//1: Si el primer valor es mayor que el segundo.
echo 1 <=> 2;
echo "\n";
$numeros = [3, 1, 4, 1, 5, 9];
echo "\n";
usort($numeros, function($a, $b) { return $a <=> $b; }); // Ordena de menor a mayor --- usort me permite ordenar arrays------funcion anónima function($a, $b)
print_r($numeros);
echo "\n";


// Ejemṕlo mas complejo 
class Persona {
    // Definimos una clase llamada "Persona"
    // Esta clase sirve como un molde para crear objetos que representen a personas

    public $edad;
    // Declaramos una propiedad pública llamada "edad" dentro de la clase
    // Esta propiedad almacenará la edad de cada persona

    public function __construct($edad) {
        // Este es el constructor de la clase
        // Se ejecuta automáticamente cuando creamos un nuevo objeto de tipo "Persona"
        // El parámetro "$edad" recibe la edad que queremos asignar al nuevo objeto
        $this->edad = $edad;
        // Asignamos el valor del parámetro "$edad" a la propiedad "edad" del objeto
    }
}

$personas = [
    // Creamos un array llamado "personas" para almacenar objetos de tipo "Persona"
    new Persona(30), // Creamos un nuevo objeto "Persona" con edad 30
    new Persona(25), // Creamos otro objeto "Persona" con edad 25
    new Persona(35)  // Creamos otro objeto "Persona" con edad 35
];

usort($personas, function($a, $b) { return $a->edad <=> $b->edad; });
// Ordenamos el array "personas" utilizando la función "usort"
// La función anónima que pasamos a "usort" compara las edades de dos objetos
// y los ordena de menor a mayor

foreach ($personas as $persona) {
    // Recorremos cada elemento del array "personas"
    // En cada iteración, "$persona" representa un objeto de tipo "Persona"
    echo "Edad: " . $persona->edad . "\n";
    // Imprimimos la edad de la persona actual
}


// La precedencia de operadores me dice que operación pasara primero en un conjunto de operaciones (primero realiza operaciones y luego realiza operaciones matemáticas)

