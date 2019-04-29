CREATE DATABASE Farmacia;

CREATE TABLE medicamento (
    id SERIAL PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    fabricante VARCHAR(50) NOT NULL,
    controlado BOOLEAN NOT NULL,
    quantidade INTEGER NOT NULL,
    preco FLOAT NOT NULL
);