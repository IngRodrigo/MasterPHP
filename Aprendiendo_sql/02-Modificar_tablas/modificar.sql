/*Renombrar una tabla*/
ALTER TABLE usuarios RENAME TO usuarios_renom;
#Cambiar el nombre de una columna#
ALTER TABLE usuarios_renom CHANGE apellidos apellido VARCHAR(100) NULL;
#MODIFICAR COLUMNA SIN CAMBIAR NOMBRE#
ALTER TABLE usuarios_renom MODIFY apellido CHAR(50) NOT NULL;
/*añadir columna a una tabla**/
ALTER TABLE usuarios_renom ADD website VARCHAR(100) NULL;
/*Añadir restrinccion a columna*/
ALTER TABLE usuarios_renom ADD CONSTRAINT uq_email UNIQUE(email);/*Solo puede existir un email para cada registro*/

/*Borrar una columna*/
ALTER TABLE usuarios_renom DROP website;

