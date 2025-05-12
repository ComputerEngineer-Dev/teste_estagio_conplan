<!-- Atividade 1.1 Por Willian Gonçalves -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atvidade 1.1</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif, sans-serif;
            margin: 35px;
            line-height: 1;
        }
        h1 {
            color:rgb(0, 0, 0);
        }
        .prod {
            background-color:rgb(250, 252, 240);
            padding: 10px;
            margin-bottom: 10px;
            border-left: 4px solid #3418db;
        }
        .preco {
            font-weight: bold;
            color:rgb(255, 0, 0);
        }
    </style>
</head>
<body>
    <h1>Filtragem de produtos com preço abaixo de R$ 50,00</h1>   
    <?php 
    echo "Resolucao Atividade 1.1 por Willian Goncalves\n";
    $produtos = array(
        array("nome" => "Mouse", "preco" => 25.90),
        array("nome" => "PenDrive", "preco" => 20.50),
        array("nome" => "Fones", "preco" => 10.75),
        array("nome" => "SSD", "preco" => 120.00),
        array("nome" => "WebCan", "preco" => 30.20),
        array("nome" => "PastaTermica", "preco" => 15.30),
        array("nome" => "Teclado", "preco" => 35.00)
    );
    $produtos_filtrados = array_filter($produtos, function($prod) {
        return $prod['preco'] < 50;
    });
    if (count($produtos_filtrados) > 0) {
        foreach ($produtos_filtrados as $prod) {
            echo '<div class="prod">';
            echo '<strong>' . htmlspecialchars($prod['nome']) . '</strong><br>';
            echo 'Preço: <span class="preco">R$ ' . number_format($prod['preco'], 2, ',', '.') . '</span>';
            echo '</div>';
        }
    } else {
        echo '<p>Nenhum produto encontrado com preço abaixo de R$ 50,00.</p>';
    }
    ?>
</body>
</html>