/*Mostrar todos los registros de una tabla*/
SELECT * FROM usuarios;
/*mostrando todos los registros de los campos que queremos*/
SELECT email, password FROM usuarios;
/*Ordenar*/
SELECT email FROM usuarios ORDER BY id DESC;

/*Operadores aritmeticos*/
SELECT email, (4+7) AS 'Operacion' FROM usuarios;
/*SUMAR COLUMNAS*/
SELECT email, (id+7) AS 'Operacion' FROM usuarios;
/*FUNCIONES EN SQL (MATEMATICAS)************************************** SE PUEDE BUSCAR EN GOOGLE FUNCIONES SQL/
/*Redondeo*/
SELECT CEIL(7.34) AS 'OPERACION' FROM usuarios;/*REDONDEA A LA ALSA*/
SELECT FLOOR(7.34) AS 'OPERACION' FROM usuarios;/*REDONDEA A LA BAJA*/

SELECT UPPER(nombre) FROM usuarios/**sacar en mayuscula**/
SELECT LOWER(nombre) FROM usuarios;/*todo en minuscula*/

/*concatenar*/
SELECT CONCAT(nombre, ' ',apellidos) AS 'nombre_completo' FROM usuarios

SELECT UPPER(CONCAT(nombre, ' ' ,apellidos)) AS 'nombre_completo_mayuscula' FROM usuarios
SELECT email, LENGTH(CONCAT(nombre, ' ' ,apellidos)) AS 'longitud_cadena' FROM usuarios
/*Fecha*****************************************************************************************/
SELECT email, fecha, CURDATE() AS 'fecha_actual' FROM usuarios;
SELECT email, DATEDIFF(fecha,CURDATE()) AS 'dias_de_diferencia_' FROM usuarios;
SELECT email, DAYNAME(fecha), CURDATE() AS 'fecha_actual' FROM usuarios;/*DAYMNAME() MUESTRA EL NOMBRE DEL DIA DE LA FECHA QUE LE PASEMOS*/
SELECT email, DAYOFMONTH(fecha), CURDATE() AS 'fecha_actual' FROM usuarios;
SELECT email, DAYOFYEAR(fecha), CURDATE() AS 'fecha_actual' FROM usuarios;
SELECT email, YEAR(fecha), CURDATE() AS 'fecha_actual' FROM usuarios;/*eL AÑO DE LA FECHA*/
/**************************/
SELECT email, fecha, CURTIME() AS 'fecha_actual' FROM usuarios;/*HORA ACTUAL*/
/**************************/
SELECT email, DATE_FORMAT(fecha,'%d-%m-%y'), CURDATE() AS 'fecha_actual' FROM usuarios;/*formatear una fecha*/
/*funciones generales*******************************************************************************/
SELECT email, ISNULL(apellidos) FROM usuarios/**comprobar si un campo esta null*/
select email, strcmp('hola','hola') from usuarios/*comprueba si son diferentes. si es 1 es true*/

select user() from usuarios/*el usuario de la base de datos*/
select distinct user() from usuarios; /*nuestra todos los datos distintos al parametro que le pasamos */

select IFNULL(apellidos, 'Este campo esta vacio') from usuarios;/*rellena el campo null con otro dato*/