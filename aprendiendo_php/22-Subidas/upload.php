<?php

$archivo=$_FILES['archivo'];

$nombre= $archivo['name'];
$tipo=$archivo['type'];
if($tipo=="image/jpg" || $tipo=="image/jpeg" || $tipo=="image/png" || $tipo=="image/gif"){
    
}else{
    echo 'Sube una imagen con un formato correcto, por favor...';
    header("Refresh:");
}