CREATE DATABASE prueba;

CREATE TABLE buscador(
    id INT AUTO_INCREMENT PRIMARY KEY,
    canciones VARCHAR(100)
);

INSERT INTO buscador(canciones)
VALUES
('Bohemian Rhapsody'),
('Imagine'),
('Hotel California'),
('Yellow'),
('Wonderwall');