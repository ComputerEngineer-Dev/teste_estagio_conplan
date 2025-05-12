<?php 
/*Atividade 1.1 Por Willian Gonçalves*/
$produtos = array(
    array("nome" => "Mouse", "preco" => 25.90),
    array("nome" => "PenDrive", "preco" => 20.50),
    array("nome" => "Fones", "preco" => 10.75),
    array("nome" => "SSD", "preco" => 120.00),
    array("nome" => "WebCan", "preco" => 30.20),
    array("nome" => "PastaTermica", "preco" => 15.30),
    array("nome" => "Teclado", "preco" => 35.00)
);
echo "------------------------------------\n";
echo "Resolucao Atividade 1.1 por Willian Goncalves\n";
echo "------------------------------------\n";
echo "Produtos com preco abaixo de R$ 50:\n";
echo "------------------------------------\n";
foreach ($produtos as $prod) {
    if ($prod['preco'] < 50) {
        echo "Nome: " . $prod['nome'] . " || Preco: R$ " . number_format($prod['preco'], 2, ',', '.') . "\n";
    }
}
