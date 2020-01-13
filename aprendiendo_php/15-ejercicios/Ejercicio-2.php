<?php

/* 
Escribir un programa, que añada valores a un aarray mientras que su longitud sea menor a 120
 * y luego mostrarlo por pantalla.
 */

$coleccion=array();
for ($index = 0; $index < 120; $index++) {
    array_push($coleccion, 'elemento-'.$index);
}
foreach ($coleccion as $value) {
    echo $value;
}