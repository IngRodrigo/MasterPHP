<?php
//abrir archivo
$archivo= fopen("Fichero_texto.txt", "r");

//leer el archivo
$contenido= fgets($archivo);
echo $contenido;
//cerrar archivo

fclose($archivo);
?>