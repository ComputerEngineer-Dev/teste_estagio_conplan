-- Atividade 2.3 Por Willian Gonçalves

SELECT 
    c.nome AS cliente,
    p.nome AS produto,
    p.preco AS preco,
    pd.data_pedido AS data_compra
FROM 
    pedidos pd
JOIN 
    clientes c ON pd.id_cliente = c.id
JOIN 
    produtos p ON pd.id_produto = p.id
ORDER BY 
    pd.data_pedido DESC;    