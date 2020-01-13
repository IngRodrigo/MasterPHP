<?php

/* 
Hacer un progra, que compruebe si una variable esta vacia y si esta vacia rellenarla con texto en minuscula y mostrarlo en mayuscula
 * y en negrita
 */

$array=array();
if(empty($array)){
    $array[]="este es el texto que se agrego al array";
    $elementoModificado=$array[0];
    
    echo '<strong>'.strtoupper($elementoModificado).'</strong>';
}else{
    echo 'El array no se encuentra vacio';
}
