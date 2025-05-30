-- Atividade 2.3 Por Willian Gonçalves

CREATE DATABASE IF NOT EXISTS loja;
USE loja;

CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL
);


CREATE TABLE IF NOT EXISTS produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10,2) NOT NULL
);


CREATE TABLE pedidos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_cliente INT NOT NULL,
    id_produto INT NOT NULL,
    data_pedido DATE,  -- Removido DEFAULT CURRENT_DATE
    FOREIGN KEY (id_cliente) REFERENCES clientes(id),
    FOREIGN KEY (id_produto) REFERENCES produtos(id)
);


INSERT INTO clientes (nome) VALUES 
('João Silva'), ('Maria Oliveira'), ('Carlos Souza');

INSERT INTO produtos (nome, preco) VALUES 
('Notebook Dell', 3299.90),
('Smartphone Samsung', 1899.50),
('Tablet Lenovo', 899.00);

INSERT INTO pedidos (id_cliente, id_produto, data_pedido) VALUES
(1, 1, '2023-11-15'), -- João comprou Notebook
(2, 2, '2023-11-18'), -- Maria comprou Smartphone
(3, 3, '2023-11-19'), -- Carlos comprou Tablet
(1, 2, '2023-11-20'); -- João comprou Smartphone