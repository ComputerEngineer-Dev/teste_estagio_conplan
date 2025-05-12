<?php /*Atividade 1.2 Por Willian Gonçalves*/
echo "Resolucao Atividade 1.3 por Willian Goncalves\n";
$nota1 = '';
$nota2 = '';
$resultado = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nota1']) && isset($_POST['nota2'])) {
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    
    if (is_numeric($nota1) && is_numeric($nota2)) {
        $nota1 = floatval($nota1);
        $nota2 = floatval($nota2);
        
        if ($nota1 >= 0 && $nota1 <= 10 && $nota2 >= 0 && $nota2 <= 10) {
            $media = ($nota1 + $nota2) / 2;
            $situacao = $media >= 7 ? 'Aprovado' : 'Reprovado';
            $resultado = "Media: " . number_format($media, 1) . " - $situacao";
        } else {
            $resultado = "Erro: As notas devem estar entre 0 e 10.";
        }
    } else {
        $resultado = "Erro: Digite valores numericos validos.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Atividade 1.3</title>
</head>
<body>
    <h1>Verifique sua situacao</h1>
    
    <form method="post">
        <label>Nota 1 (0-10):</label>
        <input type="number" name="nota1" min="0" max="10" step="0.1" value="<?= htmlspecialchars($nota1) ?>" required><br>
        
        <label>Nota 2 (0-10):</label>
        <input type="number" name="nota2" min="0" max="10" step="0.1" value="<?= htmlspecialchars($nota2) ?>" required><br>
        
        <button type="submit">Calcular</button>
    </form>
    
    <?php if ($resultado): ?>
        <h3>Resultado:</h3>
        <p><?= htmlspecialchars($resultado) ?></p>
    <?php endif; ?>
</body>
</html>