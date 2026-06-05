CREATE DATABASE Compras;

CREATE TABLE catalogo(
    id INT AUTO_INCREMENT PRIMARY KEY,
    producto VARCHAR(100),
    precio DECIMAL(9,2)
);

INSERT INTO catalogo(producto,precio)
VALUES
('Notebook',1200.00),
('Mouse',25.00),
('Teclado',50.00),
('Monitor',350.00);