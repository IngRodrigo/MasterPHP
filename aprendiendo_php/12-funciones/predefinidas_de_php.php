<?php
$nombre="Rodrigo";
var_dump($nombre);//muestra en pantalla los datos de una variable, sirve para debuggear

//fechas
echo date('d-m-y');//fechas
echo '<br>';
echo time();//fecha en formato unix
echo '<br>';
//matematicas
echo 'La raiz cuadrada de 10: '.  sqrt(10);
echo '<br>';
echo 'Número aleatorio entre 10 y 40 = '.rand(10, 40);
echo '<br>';
echo 'El número PI es= '.  pi();
echo '<br>';
echo 'Redondear= '.  round(7.89234);

///MAS FUNCIONES GENERALES
echo '<br>';
echo gettype($nombre);//muestra el tipo de la variable
echo '<br>';
if(is_string($nombre)){//is_ para coomprobar si algo es algo
    echo 'Esa variable es un String';
}else{
    if (is_float($nombre)){
        echo 'es un float';
    }
}
echo '<br>';
if(isset($edad)){//para comprobar si algo existe o no en mi sistema
    echo 'La variable existe';
}else{
    echo 'La variable no existe';
}
echo '<br>';
$frase="  mi contenido    ";
echo trim($frase);//escapar los espacios por detras y por delante del texto

echo '<br>';
//Eliminar variables o indices de array
$year=2020;
unset($year);//elimina del codigo la variable year tanto el nombre como el contenido
echo '<br>';
//comprobar variable vacia
$texo="";
if(empty($texo)){
    echo 'La variable texto esta vacia';
}else{
    echo 'La variable tiene contenido';
}
echo '<br>';
//contar caracteres de un string o cadena
$cadena="12345";
echo strlen($cadena);
echo '<br>';
//encontrar en una cadena la pocision de un caracter determinado
$frase="la vida es bella";
echo strpos($frase, "vida");
echo '<br>';
//reemplazar contenido de un string
$frase2= str_replace("vida", "moto",$frase);
echo $frase2;
echo '<br>';
//MAYUSCULAS Y MINUSCULAS
echo strtolower($frase);//todo a minuscula
echo strtoupper($frase);//todo a mayuscula