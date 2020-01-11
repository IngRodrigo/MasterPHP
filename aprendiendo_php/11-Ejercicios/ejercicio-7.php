<?php

/* 
 Hacer un programa que nos muestre todos los numeros entre dos números que lleguen por la url y que sean impares
 */
if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    if($numero1<$numero2){
    echo '<h1>Los números impares que estan entre'.$numero1.' y '.$numero2.' son:<br>';
    for ($i = ($numero1 + 1); $i < $numero2; $i++) {
        if ($i%2!=0){
            echo 'Nº: ' . $i . '<br>';
        }
    }
    }else{
        echo 'El primero valor debe ser menor al segundo';
    }

    }else{
    echo 'Favor, ingrese dos valores por la URL';
}
