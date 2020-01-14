<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Subida de archivos</title>
    </head>
    <body>
        <h1>Subir archivos al servidor</h1>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="archivo"/>
            <input type="submit" value="Enviar"/>
        </form>
        <h1>Listado de imagenes</h1>
        <?php
        $gestor=  opendir('./images');//opendir abre el directorio
        
        if($gestor)://si es true es porque abrio el directorio
        
            while (($image= readdir($gestor))!=false)://mientras que el contenido de gestor no sea false. va a leer todo el direcotrio
                if($image!='.' && $image != '..')://gestion de archivos . y .. son volver al directorio anterior
                    echo "<img src='images/$image' width='200px'/></br>";
                endif;
            endwhile;
        endif;
        ?>
    </body>
</html>