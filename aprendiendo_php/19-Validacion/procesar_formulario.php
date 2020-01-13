<?php
$error="faltan_datos";
if  (
    !empty($_POST['nombre'])&&
    !empty($_POST['apellido'])&&
    !empty($_POST['edad'])&&
    !empty($_POST['email'])&&
    !empty($_POST['password'])
    )
{
    $error="OK";
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $edad=(int)$_POST['edad'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    //validar el nombre
    if(!is_string($nombre)|| preg_match("/[0-9]+/", $nombre)){//si no es un string y si no tiene numeros
    $error="nombre";
    }
    if(!is_string($apellido)|| preg_match("/[0-9]+/", $apellido)){//si no es un string y si no tiene numeros
    $error="apellido";
    }
    if(!is_int($edad)|| filter_var($edad, FILTER_VALIDATE_INT)){//si no es un string y si no tiene numeros
    $error="edad";
    }
    if(!is_string($email)|| filter_var($email, FILTER_VALIDATE_EMAIL)){//si no es un string y si no tiene numeros
    $error="email";
    }
    if(!empty($pass)|| strlen($pass)<5){//si no esta vacio y si su longitud es mayor a 0
    $error="password";
    }

}else{
    $error="faltan_datos";
}

if($erro!='OK'){
    header("Location:index.php?error=$error");
}
?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Validacion de formularios</title>
    </head>
    <body>
        
        <?phpif($error=="OK"):?>
        <h1>Datos del usuario validados correctamente.</h1>
        <p><?=$nombre?></p>
        <p><?=$apellido?></p>
        <p><?=$edad?></p>
        <p><?=$email?></p>
        <?phpendif;?>
    </body>
    </html>