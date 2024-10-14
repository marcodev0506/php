<?php

$gasto_mayor= TRUE;
$gastos_menor= FALSE;
$gastos_debitados= TRUE;
$gastos_iva= FALSE;

var_dump($gastos_debitados and $gastos_menor);
echo "\n";

var_dump($gastos_iva || $gasto_mayor);
echo "\n";
