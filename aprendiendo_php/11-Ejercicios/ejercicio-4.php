<?php

/*
  Recoger dos numeros por parametro GET y hacer las operaciones basicas de una calculadora
 */
echo '<h1>CALCULADORA</H1>';

if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    echo 'La suma de los números es ' . calculadora($numero1, $numero2)[0].'<br>';
    echo 'La resta de los números es ' . calculadora($numero1, $numero2)[1].'<br>';
    echo 'La multiplicacion de los números es ' . calculadora($numero1, $numero2)[2].'<br>';
    echo 'La division de los números es ' . calculadora($numero1, $numero2)[3].'<br>';
}else{
    echo 'Favor introducir dos valores por la url';
}

function calculadora($numero1, $numero2) {
    $resultados[0] = ($numero1 + $numero2);
    $resultados[1] = ($numero1 - $numero2);
    $resultados[2] = ($numero1 * $numero2);
    $resultados[3] = ($numero1 / $numero2);
    return $resultados;
}
