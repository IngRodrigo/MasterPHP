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
