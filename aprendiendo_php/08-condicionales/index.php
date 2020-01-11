<?php

//operadores de comparacion
$color = "verde";

if ($color == "rojo") {
    echo 'El color es rojo';
} else {
    echo 'El color no es rojo';
}
echo '<br>';
$year = 2019;
if ($year < 2018) {
    echo 'Estamos en un año mayor a 2019';
} else {
    echo 'Estamos en un año menor a 2019';
}
echo '<br>';

$edad = 42;
$mayor_de_edad = 18;
$nombre = "David Extremadura";
$ciudad = "Madrid";
$continente = "Europa";
if ($edad >= $mayor_de_edad) {
    echo '<h1>' . $nombre . ' es mayor de edad </h1>';
    if ($continente == "Europa") {
        echo '<h2>Vive en la ciudad de ' . $ciudad . '</h2>';
    } else {
        echo 'No es de Europa';
    }
} else {
    echo '<h1>' . $nombre . ' no es mayor de edad </h1>';
}
echo '<br>';
$dia = 5;

if ($dia == 1) {
    echo 'Es lunes';
} elseif ($dia == 2) {
    echo 'Es Martes';
} elseif ($dia == 3) {
    echo 'Es Miercoles';
} elseif ($dia == 4) {
    echo 'Es Jueves';
} elseif ($dia == 5) {
    echo 'Es viernes';
}else{
    echo 'Es fin de semana';
}
echo '<hr>';
$edad1=18;
$edad2=64;
$edad_oficial=64;
if($edad_oficial>=$edad1 && $edad_oficial<=$edad2){
    echo 'Esta en edad de trabajar';
}else{
    echo 'No esta en edad de trabajar';
}

echo '<hr>';
$dia=1;
switch ($dia){
    case 1:
        echo "Es Lunes";
        break;
    case 2:
        echo "Es Martes";
        break;
    case 3:
        echo 'Es Miercoles';
        break;
    case 4:
        echo 'Es Jueves';
        break;
    case 5:
        echo 'Es Viernes';
        break;
    default:
        echo 'Es fin de semana';
        
}
?>