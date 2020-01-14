<?php

/* 
Crear una sesion que aumente su valor en 1 o disminuya en 1 en funcion del parametro get_counter esta en uno o en 0
 */

session_start();
if(!isset($_SESSION['numero'])){
    $_SESSION['numero']=0;
    
}
if(isset($_GET['counter'])&& $_GET['counter']==1){
    $_SESSION['numero']++;
}
if(isset($_GET['counter'])&& $_GET['counter']==0){
    $_SESSION['numero']--;
}
?>
<h1>El valor de la sesion número es: <?=$_SESSION['numero']?></h1>
<a href="ejercicio-1.php?counter=1">Aumentar a Uno</a>
<a href="ejercicio-1.php?counter=0">Disminuir el valor</a>

