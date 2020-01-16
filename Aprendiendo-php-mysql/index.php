<?php
/*Conectar a la base de datos*/
$conexion=  mysqli_connect('localhost', 'root', '', 'phpmysql');
/*comprobar si la conexion es correcta*/
//if(mysqli_connect_errno()){
//    echo 'La conexion a la base de datos ha fallado'. mysqli_connect_errorr();
//}else{
//    echo 'Exito';
//}
mysqli_query($conexion, "Set name utf-8");

/*Consulta select desde php*/
$query=mysqli_query($conexion, "Select * from notas");
    

while ($nota = mysqli_fetch_assoc($query)){
echo '<p>'.$nota['descripcion'].'</>';
}
/*Insertar en la base de datos desde php*/
$sql="insert into notas value (null, 'Nota desde php','Esto es una nota desde php','green')";
$insert=  mysqli_query($conexion, $sql);

if($query){
    echo 'Datos insertados correctamente';
}else{
    echo 'Error al insertar '.  mysqli_error($conexion);
}