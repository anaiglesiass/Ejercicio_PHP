USE cadenafarmacias;
DROP TABLE IF EXISTS usuario;
CREATE TABLE usuario(
    ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombre varchar(20) NOT NULL,
    apellido varchar(20) NOT NULL, 
    email varchar(20) NOT NULL)
ENGINE=INNODB DEFAULT CHARSET=utf8mb4;

# Añadimos algunos datos de ejemplo:
INSERT INTO usuario (nombre, apellido, email) VALUES ('John', 'Smith', 'john@example.com');
INSERT INTO usuario (nombre, apellido, email) VALUES ('Emily', 'Johnson', 'emily@example.com');
INSERT INTO usuario (nombre, apellido, email) VALUES ('Michael', 'Davis', 'michael@example.com');
INSERT INTO usuario (nombre, apellido, email) VALUES ('Sarah', 'Anderson', 'sarah@example.com');

#Observamos que los datos se han creado correctamente:
SELECT * FROM usuario;