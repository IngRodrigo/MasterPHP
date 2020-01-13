<?php
//Sesiones................
//Iniciar la sesion
session_start();
$cadena="Soy una cadena de texto";//variable normal
$_SESSION['variable_persistente']="Hola soy una sesion activa"; //variable de sesion

echo $cadena.'</br>';
echo $_SESSION['variable_persistente'];
?>