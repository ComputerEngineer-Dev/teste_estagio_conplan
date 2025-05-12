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

echo "<h3>Menores de idade:</h3>";
echo "<ul>";
foreach ($menores as $menor) {
    echo "<li>" . $menor['nome'] . " - " . $menor['idade'] . " anos</li>";
}
echo "</ul>";
echo "<h3>Maiores de idade:</h3>";
echo "<ul>";
foreach ($maiores as $maior) {
    echo "<li>" . $maior['nome'] . " - " . $maior['idade'] . " anos</li>";
}
echo "</ul>";
?>