CREATE DATABASE base2;

CREATE TABLE alumnos(
    codigo INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    codigocurso INT,
    mail VARCHAR(100)
);

INSERT INTO alumnos(nombre,codigocurso,mail)
VALUES
('Juan Perez',101,'juan@gmail.com'),
('Ana Lopez',102,'ana@gmail.com'),
('Pedro Garcia',103,'pedro@gmail.com');