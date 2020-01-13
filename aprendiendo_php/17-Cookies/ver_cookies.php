<?php
//para mostrar el valor de las galletas tengo que usar $_cookies, variable super gobal y es un array asociativo
if(isset($_COOKIE['miCookie'])){
    $galletaNormal=$_COOKIE['miCookie'];
    echo 'La galleta es: '.$galletaNormal.'<br>';
}else{
    echo 'No existe la cookie';  
}
if(isset($_COOKIE['unYear'])){
    echo 'La galleta es: '.$_COOKIE['unYear'];
}else{
       echo 'No existe la cookie';   
}

?>
<a href="borrar_cookies.php">Borrar galleta</a>
<a href="crear_cookies.php">Crear galletas</a>