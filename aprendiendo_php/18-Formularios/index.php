<?php
?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Formularios php y html</title>
    </head>
    <body>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="nombre">Nombre:</label> <br>
            <p><input type="text" name="nombre" autofocus="autofocus"/></p>
            <label for="apellido">Apellidos:</label><br>
            
            <p><input type="text" name="apellido" required="required"/></p>
            
            <input type="submit" value="Enviar"/>
        </form>
    </body>
</html>