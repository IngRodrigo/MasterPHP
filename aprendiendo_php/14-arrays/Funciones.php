<?php
$cantantes=['2pac','Drake','Jennifer Lopez','alfredo'];
$numeros=[1,2,3,5,4];
sort($numeros);
//var_dump($numeros);
//ordenar array por orden alfabatico
arsort($cantantes);

///añadir un elemnto a un array
$cantantes[]='Natos';
//opcion 2
array_push($cantantes, "Enrique");
//eliminar elemnento
array_pop($cantantes);
//eliminar con el indice deseado
unset($cantantes[2]);

//sacar un elemento aleatorio del array
$indice= array_rand($cantantes);
echo $cantantes[$indice];
//Dar la vuelta un array
$arrayInverso=array_reverse($numeros);
//buscar dentro de un array
$resultado=array_search('alfredo', $cantantes);
//contar numero de elementos
echo count($cantantes);
?>
