<?php /*Atividade 1.2 Por Willian Gonçalves*/
echo "Digite a primeira nota (0-10): ";
$nota1 = trim(fgets(STDIN));
echo "Digite a segunda nota (0-10): ";
$nota2 = trim(fgets(STDIN));
if (!is_numeric($nota1) || !is_numeric($nota2)) {  // Corrigido: parêntese faltando
    die("Erro: As notas devem ser valores numericos.\n");
}

$nota1 = floatval($nota1);
$nota2 = floatval($nota2);

if ($nota1 < 0 || $nota1 > 10 || $nota2 < 0 || $nota2 > 10) {
    die("Erro: As notas devem estar entre 0 e 10.\n");
}

$media = ($nota1 + $nota2) / 2;
$situacao = $media >= 7 ? 'Aprovado' : 'Reprovado';

echo "\nResultado:\n";
echo "Nota 1: " . number_format($nota1, 1) . "\n";
echo "Nota 2: " . number_format($nota2, 1) . "\n";
echo "Media: " . number_format($media, 1) . "\n";
echo "Situacao: " . $situacao . "\n";
?>