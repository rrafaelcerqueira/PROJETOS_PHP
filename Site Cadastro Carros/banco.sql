CREATE DATABASE crud_conscecionaria;

USE crud_conscecionaria;

CREATE TABLE carros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    marca VARCHAR(50) NOT NULL,
    placa VARCHAR(255) NOT NULL
);
