<?php

/* 
Sacar todos los numeros pares del uno al 100
 */
echo '<h1>Los números pares del 1 al 100</h1>';
for ($i = 1; $i <=100; $i++) {
    if($i%2==0){
        echo 'El número: '.$i.'<br>';
    }
}
