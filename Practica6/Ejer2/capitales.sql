CREATE DATABASE Capitales;

USE Capitales;

CREATE TABLE Ciudades(
    id INT AUTO_INCREMENT PRIMARY KEY,
    ciudad VARCHAR(50),
    pais VARCHAR(50),
    habitantes INT,
    superficie DECIMAL(10,2),
    tieneMetro BOOLEAN
);

INSERT INTO Ciudades
(ciudad,pais,habitantes,superficie,tieneMetro)
VALUES
('México D.F.','México',555666,23434.34,1),
('Barcelona','España',444333,1111.11,0),
('Buenos Aires','Argentina',888111,333.33,1),
('Medellín','Colombia',999222,888.88,0),
('Lima','Perú',999111,222.22,0);