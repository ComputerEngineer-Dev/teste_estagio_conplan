-- Atividade 2.1 Por Willian Gonçalves
CREATE DATABASE loja;

USE loja;

CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10,2) NOT NULL
);

INSERT INTO produtos (nome, preco) VALUES 
('Notebook', 3299.90),
('Smartphone', 1899.50),
('Tablet', 899.00),
('Mouse', 199.90),
('Teclado', 349.00);

SELECT * FROM produtos;
