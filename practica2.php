<?php
define("Apodos", 2000);
//Debugging de arreglo
$precio= "23";
$gatos = [
    "Mitzu"=> 2,
    "Raibi"=> 23,
    "Toncas"=> 12
    
    ];

var_dump($gatos);

echo "\n";
print_r($gatos);

echo "\n";
var_dump ($precio);
$precio= (int) $precio; // Casting me permite forzar a cambiar el tipo de dato de una variable 
echo "\n";
var_dump ($precio);
echo Apodos;

