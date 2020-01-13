<?php
//setcookie('nombre',"Valor que solo puede ser texto",caducidad,ruta,dominio);
//Cookie basica
setcookie("miCookie", "Valor de mi Galleta");
//Cookie con expiracion
setcookie("unYear", "Valor de mi cookie de 365 dias", time()+(60*60*24*365));//seg*min*horas*dias esto dura un año

?>
<a href="ver_cookies.php">Ver mis galletas</a>
