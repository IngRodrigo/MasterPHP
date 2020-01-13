<?php
//Arrays
$peliculas= array('Batman', 'Spiderman','Señor de los anillos');
$cantantes=['2pac','Drake','Jennifer Lopez'];
//array con indices alfanumericos - Array asociativos
$personas= array(
    'nombres'=>'Rodrigo',
    'apellidos'=>'Sanchez',
    'Web'=>'www.rodrigo.com'
);

//recorrer con for
echo '<h1>Listado de Peliculas</h1>';
echo '<ul>';
for ($i = 0; $i < count($peliculas); $i++) {
    echo '<li>'.$peliculas[$i].'</li>';
}
echo '</ul>';

//recorrer con foreach
echo '<h1>Listado de Cantantes</h1>';
echo '<ul>';
foreach ($cantantes as $cantante) {
    echo '<li>'.$cantante.'</li>';
}
echo '</ul>';

//arrays multidimencionales
$contactos= array(
    array(
        'nombre'=>'antonio',
        'email'=>'antonio@antonio.com'
    ),
    array(
        'nombre'=>'Luis',
        'email'=>'luis@luis.com'
    ),
    array(
        'nombre'=>'Salvador',
        'email'=>'salvador@salvador.com'
    )
);
foreach ($contactos as $key => $contacto) {
    var_dump($contacto['nombre']);
}

;?>