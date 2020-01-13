<?php ?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Validacion de formularios</title>
    </head>
    <body>
        <h1>Validacion de formularios en PHP</h1>
        <?php
        if (isset($_GET['error'])){
            $error=$_GET['error'];
            if($error=="faltan_datos"){
                echo'<strong style="color:red">Introduce todos los datos en todos los campos del formulario </strong>';
            }
        }
        ?>
        <form method="POST" action="procesar_formulario.php">
            <label for="nombre">Nombre:</label><br>
            <input type="text" name="nombre" required="required" pattern="[A-Za-z]+"/><br>
            <label for="apellido">Apellidos:</label><br>
            <input type="text" name="apellido" required="required" pattern="[A-Za-z]+"/><br>
            <label for="edad">Edad:</label><br>
            <input type="text" name="edad" required="required" pattern="[0-9]+"/><br>
            <label for="email">Email</label><br>
            <input type="email" name="email" required="required"/><br>
            <label for="password">Contraseña</label><br>
            <input type="password" name="password" required="required"/><br>
            <input type="submit" value="Enviar"/>
        </form>
    </body>
</html>