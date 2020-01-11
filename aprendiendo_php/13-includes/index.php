<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Includes en PHP</title>
    </head>
    <body>
        <!--Cabecera-->
<?php
include './includes/cabecera.php';
?>
        <div class="Contenido">
            <h2>Esta es la pagina de inicio</h2>
            <p>Texto de prueba de la pagina de inicio</p>
        </div>
        <footer>
            Todos los derechos reservados &copy; Rodrigo Sánchez <?=  date('Y')?>
        </footer>
    </body>
</html>

