<?php
define("Apodos", 2000);
//Debugging de arreglo
$precio= "23";
$gatos = [
    "Mitzu"=> 2,
    "Raibi"=> 23,
    "Toncas"=> 12
    
    ];
$Descuento_enero= 20;
$Descuento_febrero= 50;
$Descuento_marzo=60;

$Descuento_enero= $Descuento_febrero= $Descuento_marzo;

var_dump($gatos);

echo "\n";
print_r($gatos);

echo "\n";
var_dump ($precio);
$precio= (int) $precio; // Casting me permite forzar a cambiar el tipo de dato de una variable 
echo "\n";
var_dump ($precio);
echo Apodos;
echo "\n";
//La predencia del igual es a la derecha por eso el valor de Descuento_enero es 60 y no 50
var_dump($Descuento_enero);

