<?php

/*
  Imprimir por pantalla todas las tablas de multiplicar del 1 al 10 e imprimir en una tabla html
 *  */
echo '<table border=1>';


echo '<tr>';//inicio fila 1
for ($i = 1; $i <= 10; $i++) {
    echo '<td>Tabla del ' . $i . '</td>';
}
echo '</tr>';//fin de la fila 1

echo '<tr>';//inicio fila 2
for ($i = 1; $i <= 10; $i++) {
    echo '<td>';

    for ($index = 1; $index <= 10; $index++) {
        echo $i . ' X ' . $index . ' = ' . ($i * $index) . '<br>';
    }
    
    echo '</td>';
}
echo '</tr>';//fin fila 2

echo '</table>';
?>