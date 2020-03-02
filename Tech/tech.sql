CREATE DATABASE tech;

USE tech;

CREATE TABLE usuarios (
	id INT NOT NULL UNIQUE AUTO_INCREMENT,
	nombre VARCHAR(25) NOT NULL UNIQUE,
	email VARCHAR(255) NOT NULL UNIQUE,
	password VARCHAR(255) NOT NULL,
	fecha_registro DATETIME NOT NULL,
	activo TINYINT NOT NULL,
	PRIMARY KEY(id)
);



CREATE TABLE entradas (
        id INT NOT NULL UNIQUE AUTO_INCREMENT,
        nombre_id INT NOT NULL,
        domicilio TEXT CHARACTER SET utf8 NOT NULL,
        descripcion TEXT CHARACTER SET utf8 NOT NULL,
        fecha DATETIME NOT NULL,
        activa TINYINT NOT NULL,
        PRIMARY KEY(id),
        FOREIGN KEY(nombre_id)
            REFERENCES usuarios(id)
            ON UPDATE CASCADE
            ON DELETE RESTRICT
);

CREATE TABLE comentarios (
        id INT NOT NULL UNIQUE AUTO_INCREMENT,
        nombre_id INT NOT NULL,
        entrada_id INT NOT NULL,
        titulo VARCHAR(255) NOT NULL,
        texto TEXT CHARACTER SET utf8 NOT NULL,
        fecha DATETIME NOT NULL,
        PRIMARY KEY(id),
        FOREIGN KEY(nombre_id)
            REFERENCES usuarios(id)
            ON UPDATE CASCADE
            ON DELETE RESTRICT,
        FOREIGN KEY(entrada_id)
            REFERENCES entradas(id)
            ON UPDATE CASCADE
            ON DELETE RESTRICT
);

CREATE TABLE recuperacion_clave (
		id INT NOT NULL UNIQUE AUTO_INCREMENT,
		usuario_id INT NOT NULL,
		fecha DATETIME NOT NULL,
		PRIMARY KEY(id),
		FOREIGN KEY(usuario_id)
                REFERENCES usuarios(id)
                    ON UPDATE CASCADE
               	    ON DELETE RESTRICT
);
		