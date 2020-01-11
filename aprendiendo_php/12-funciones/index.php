<?php
//ejemplo 1
function muestraNombres(){
    echo 'Rodrigo<br>';
    echo 'Jhoel<br>';
    echo 'Diana<br>';
    echo 'Johan<br>';
    echo '<hr>';
}
//ejemplo 2
function tabla($numero){
    
    echo '<h1>Tabla de multiplicar del número: '.$numero.'</h1>';
    for ($i = 1; $i <=10; $i++) {
        echo $numero.' X '.$i.' = '.($numero*$i).'<br>';
    }
}
$numero=$_GET['numero'];
//tabla($numero);
//
//Ejemplo 3

?>