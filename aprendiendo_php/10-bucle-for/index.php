<?php

$resultado = 0;
for ($i = 0; $i <= 100; $i++) {
    $resultado = $resultado + $i;
}
echo 'El resultado de la suma de todos los numeros del uno al 100 es: ' . $resultado . '<br>';

if (isset($_GET['numero'])) {
    $numero = (int) $_GET['numero'];
} else {
    $numero = 1;
}
echo '<h1>Tabla de multiplicar del: ' . $numero . '</h1><br>';
for ($i = 1; $i <= 10; $i++) {
    if ($numero == 45) {
        echo 'No se puedemostrar esta operacion';
        break;
    }
    echo $numero . ' X ' . $i . ' = ' . ($numero * $i) . '<br>';
}
?>