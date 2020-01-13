<?php
////abrir archivo
//$archivo= fopen("Fichero_texto.txt", "a+");
//
////leer el archivo
//while (!feof($archivo)){
//   $contenido=  fgets($archivo);
//   echo $contenido.'<br>';
//}
////escribir en un archivo
//fwrite($archivo, "Soy un texto metido desde php");
////cerrar archivo
//
//fclose($archivo);
//copiar un fichero
copy('Fichero_texto.txt', 'Fichero_copiado.txt')or die('Error al copiar');
//renombrar un fichero
rename('Fichero_copiado.txt', 'archivito_recopiadito.txt');
//eliminar un archivo
unlink('archivito_recopiadito.txt') or die('Error al borrar el archivo');
//comprobar si el archivo existe.
if(file_exists("Fichero_texto.txt")){
    echo 'El archivo existe';
}else{
    echo 'El archivo no existe';
}
?>