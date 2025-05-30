-- Atividade 2.2 Por Willian Gonçalves

SELECT 
    id,
    nome AS produto,
    CONCAT('R$ ', FORMAT(preco, 2)) AS preco_formatado
FROM 
    produtos
WHERE 
    preco > 50.00
ORDER BY 
    preco DESC;
