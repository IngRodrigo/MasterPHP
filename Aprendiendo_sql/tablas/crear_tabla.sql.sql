/*
Crear tabla

Tipos de datos
int
integer     enteros 255 caracteres -    4294967299 numero maximo del integer
varchar     alfanumericos (255 caracteres)
char    
float
double
date, time, timestamp(hora en utc)

text    65535 caracteres
mediumtext 16 millones de caracteres
longtext 4 bilones de caracteres

enteros mas grandes
mediumint
bigint
*/
/*Crear una nueva base de datos*/
create database miBaseDeDatos;

/*Seleccionar una base de datos para trabajaar con ella*/
use database miBaseDeDatos;

/*Mostrar todas las tablas de la base de datos seleccionada*/
show tables

/** Mostrar toda la descripcion y propiedaddes de la tabla requerida*/
desc usuarios

/*Mostrar todos los datos de la tabla en cuestion*/
select * from usuarios;

/*Crear una tabla*/
create table usuarios(
id int(11) not null, 
nombre varchar(100),
apellidos varchar(255),
email varchar(255),
password varchar(255)
);
/*Eliminar una tabla*/
drop table usuarios;
