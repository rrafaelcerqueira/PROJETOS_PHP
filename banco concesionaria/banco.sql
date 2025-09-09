CREATE DATABASE concesionaria_Paulo_Carros_picas;

USE concesionaria_Paulo_Carros_picas;

CREATE TABLE Carros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    nome_dono VARCHAR(20) NOT NULL,
    marca VARCHAR(50) NOT NULL,
    placa VARCHAR(255) NOT NULL
);
