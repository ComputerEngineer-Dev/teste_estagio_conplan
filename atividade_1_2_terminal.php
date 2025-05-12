<?php /*Atividade 1.2 Por Willian Gonçalves*/
$usuarios = array(
    array("nome" => "Gabriele", "idade" => 17),
    array("nome" => "Gabriel", "idade" => 25),
    array("nome" => "Giovana", "idade" => 15),
    array("nome" => "Ana", "idade" => 30),
    array("nome" => "Stephane", "idade" => 12),
    array("nome" => "Luiza", "idade" => 18),
    array("nome" => "Willian", "idade" => 22)
);
$menores = array();
$maiores = array();
foreach ($usuarios as $user) {
    if ($user['idade'] < 18) {
        $menores[] = $user; // Adiciona ao array de menores
    } else {
        $maiores[] = $user; // Adiciona ao array de maiores
    }
}


echo "------------------------------------\n";
echo "Resolucao Atividade 1.2 por Willian Goncalves\n";
echo "------------------------------------\n";

echo "Menores de idade:\n";
foreach ($menores as $menor) {
    echo "- " . $menor['nome'] . " (" . $menor['idade'] . " anos)\n";
}

echo "\nMaiores de idade:\n";
foreach ($maiores as $maior) {
    echo "- " . $maior['nome'] . " (" . $maior['idade'] . " anos)\n";
}
?>