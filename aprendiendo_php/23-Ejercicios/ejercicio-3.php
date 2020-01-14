<?php
/*
  Crear una calculadora en php, con interfaz en un formulario
  con dos input y cuatro botones, uno para sumar, restar, dividir y multiplicar y mostrar el resultado en pantalla
 */

if(isset($_POST['n1'])&& isset($_POST['n2'])){
    $resultado=false;
    $n1=$_POST['n1'];
        $n2=$_POST['n2'];
    if(isset($_POST['sumar'])){
        if(!empty($n1) & !empty($n2)){
             $resultado='El resultado es: '.($n1+$n2);        
        }else{
            $resultado="Favor introduce numeros validos en la calculadora";
        }
       
    }
        if(isset($_POST['restar'])){
        if(!empty($n1) & !empty($n2)){
             $resultado='El resultado es: '.($n1-$n2);        
        }else{
            $resultado="Favor introduce numeros validos en la calculadora";
        }
       
    }
        if(isset($_POST['multiplicar'])){
        if(!empty($n1) & !empty($n2)){
             $resultado='El resultado es: '.($n1*$n2);        
        }else{
            $resultado="Favor introduce numeros validos en la calculadora";
        }
       
    }
        if(isset($_POST['dividir'])){
        if(!empty($n1) & !empty($n2)){
             $resultado='El resultado es: '.($n1/$n2);        
        }else{
            $resultado="Favor introduce numeros validos en la calculadora";
        }
       
    }
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Calculadora en PHP</title>
    </head>
    <body>
        <h1>Calculadora</h1>
        <form action="" method="POST"><br>
            <label for="n1">Numero 1: </label><br>
            <input type="number" name="n1"/><br>
            <label for="n2">Numero 2: </label><br>
            <input type="number" name="n2"/><br>
            <input type="submit" value="Sumar" name="sumar"/>
            <input type="submit" value="Restar" name="restar"/>
            <input type="submit" value="Multiplicar" name="multiplicar"/>
            <input type="submit" value="Dividir" name="dividir"/>
        </form>
        <?php if(isset($resultado)):?>
        <h1><?=$resultado?></h1>
        <?php endif;?>
    </body>
</html>

