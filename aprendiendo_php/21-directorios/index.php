<?php
if(!is_dir('mi_carpeta')){
mkdir('mi_carpeta',0777) or die('No se puede crear la carpeta');    
}else{
    echo'Ya existe la carpeta';
}
//borrar directorios
rmdir('mi_carpeta');


