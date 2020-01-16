
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