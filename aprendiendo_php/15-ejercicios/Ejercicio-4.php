<?php

/* 
Crear un scrip en php que tenga.
 * Cuatro variables, una de tipo array otra de tipo string, otra int y otra boolean 
 * y que imprima un menaje segune l tipo de variable que sea.
 */

$esto_es_un_array=array(1,2,3,4,5);
$esto_es_un_string="Hola mundo";
$esto_es_un_int=1;
$esto_es_un_boolean=true;

echo 'Las variables dentro del programa son: <br>';
echo 'De tipo: '.gettype($esto_es_un_string).'<br>';
echo 'De tipo: '.gettype($esto_es_un_int).'<br>';
echo 'De tipo: '.gettype($esto_es_un_array).'<br>';
echo 'De tipo: '.gettype($esto_es_un_boolean).'<br>';