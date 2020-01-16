
/*Consutas con condiciones*/
/*Operadores de comparacion
igual           =
mayor que       >
menor que       <
mayor o igual   >=
menor o igual   <=
entre           betwen A and B
en              in
es nulo         isnull
no es nulo      is not null
como o similaar like
no es como      not like
OPERADORES LOGICOS
O               OR
Y               AND
NO              NOT

*/
select * from usuarios where email='admin@admin.com';
/*ejemplo 1*
Todos los usuarios que se han registrado el 2019
*/
select nombre, apellidos from usuarios where year(fecha)=2019;
/*ejemplo 1*
Todos los usuarios que no se han registrado el 2019 o sea nula la fecha
*/
select nombre, apellidos from usuarios where year(fecha)!=2019 or isnull(fecha);
/*eL EMAIL DE LOS USUARIOS EN CUYO APELLIDO SE ENCUNTRE LA LETRA Y QUE LA CONTRASEÑA SEA 123*/
select * from usuarios where apellidos like '%a%' and password=123
/*Sacar todos los registros de la tabla usuarios cuyo año sea par*/
select * from usuarios where (year(fecha)%2!=0);
/* Sacar todos los registros cuyo nombre tenga mas de 5 letras y que se hayan registrado antes de 2020  y mostrar
el nombre en mayuscula*/
select upper(nombre), apellidos from usuarios where (length(nombre)>5) and (year(fecha)<2020);