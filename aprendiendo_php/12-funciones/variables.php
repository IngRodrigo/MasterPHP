<?php
//globales y locales
$frase="Ni los genios son tan genios, ni los mediocres son tan mediocres";//global
function holaMundo(){
    global $frase;
    echo '<h1>'.$frase.'</h1>';

    $year=2019;
    echo '<h2>'.$year.'</h2>';

    return $year;
}


//funciones en variables
function buenosDias(){
    return 'Hola, buen dia ';
}
function buenasTardes(){
    return 'ey, que tal la comida?';
}
function buenasNoches(){
    return 'Te vas a dormir ya?, Buenas noches';
}
$horario=  buenasNoches();
echo $horario;
?>