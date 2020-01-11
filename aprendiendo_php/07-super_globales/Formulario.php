<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Variables GET y POST</title>
    </head>
    <body>
        <h1>Formulario</h1>
        <form method="POST" action="Recibir.php">
            <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre"/>
            </p>
            <p>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos"/>
            </p>
            
            <input type="submit" value="Enviar datos"/>
        </form>
    </body>
    
</html>