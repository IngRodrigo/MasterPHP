<?php

/* 
Hacer un programa que tenga un array con 8 numeros enteros, y que haga lo siguiente:
 * 1 - Recorrerlo y mostrarlo.
 * 2 - Ordenarlo y mostrarlo.
 * 3 - Mostrar su longitud.
 * 4 - Buscar algun elemento.
 */

$numeros=array(1,3,5,4,2,7,6,8);
//recorrer el array
foreach ($numeros as $numero) {
    //mostrar el aaray
    echo '<h2>Nº: '.$numero.'</h2>';
}
echo '<hr>';
//ordenar el array 
$array_ordenado=  asort($numeros);
//mostrar el array ordenado
echo '<ul>';
foreach ($numeros as $numero) {
    echo '<li>'.$numero.'</li>';
}
echo '</ul>';

echo '<hr>';
//mostrar la longitud del array
echo 'La longitud del Array es: '.  count($numeros).'<br>';
echo '<hr>';
//buscar un elemento dentro del array
if(isset($_GET['buscar'])){
$busqueda=$_GET['buscar'];
$elemento=  array_search($busqueda, $numeros);
if(empty($elemento)){
    echo 'El elemento que busca no existe';
}else{
    echo 'El elemento exsite y se encuntra en el indice: '.$elemento;
}
}else{
    echo 'No existen parametros, favor introduzca un parametro de busqueda en la url. Con el indice buscar';
}
