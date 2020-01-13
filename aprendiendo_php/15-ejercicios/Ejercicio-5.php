<?php
require_once './includes/Juegos.php';
/*
  Crear un array con el contenido de la siguiente tabla
 * Accion Aventura Deportes
 * GTA      Assasins Fifa19
 * COD      Crash       pes19
 * PUG      Prince of persia motogp19

  y cada una de las columnas debe ir en un fichero separado
 */
?>
<h1>Mejores Juegos segun su genero</h1>
<table border="1">
    <?php
    require_once './includes/Encabezados.php';
    require_once './includes/fila1.php';
    require_once './includes/fila2.php';
    require_once './includes/fila3.php';
    ?>    
</table>


