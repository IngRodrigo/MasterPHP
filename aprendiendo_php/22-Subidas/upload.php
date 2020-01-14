<?php

$archivo=$_FILES['archivo'];//trae un array con todos los datos del archivo seleccionado
//var_dump($archivo);
$nombre= $archivo['name'];
$tipo=$archivo['type'];
if($tipo=="image/jpg" || $tipo=="image/jpeg" || $tipo=="image/png" || $tipo=="image/gif"){
    if(!is_dir('images')){//si no existe el directorio images
        mkdir('images',0777);//mkdir crea directorio
    }
    move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);//tmp_name es la ruta donde se encuentra el archivo
    echo '<h1>Imagen subida correctamente</h1>';
    header('Refresh:5; URL=index.php');
}else{
    header("Refresh:5; URL=index.php");//espera 5 segundos y vuelve a redirigir al index
    echo 'Sube una imagen con un formato correcto, por favor...';
}