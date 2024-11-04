<?php


//---------------------------------------------------------------
$horas= readline("Ingrese el tiempo en horas:  ");
$minutos= readline("Ingrese el tiempo en minutos:  "); 
$segundos= readline("Ingrese el tiempo en segundos:  ");

$total= ($horas*60*60) +($minutos*60) +$segundos;

echo("El tiempo sumado es $total segundos totales \n" );


