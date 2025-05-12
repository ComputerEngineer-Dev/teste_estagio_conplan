// Atividade 3.3 Por Willian Gonçalves
var produtos = [
    { nome: "Caneta", preco: 2.50 },
    { nome: "Caderno", preco: 15.00 },
    { nome: "Borracha", preco: 1.20 }
];


function mostrarTabela() {
    console.log("\nTabela de Produtos");
    console.log("----------------------------");
    console.log("Produto    | Preço (R$)");
    console.log("----------------------------");
    
    produtos.forEach(function(produto) {
        console.log(
            produto.nome.padEnd(10) + " | " + 
            produto.preco.toFixed(2).padStart(8)
        );
    });
    
    console.log("----------------------------\n");
}

function aumentarPrecos() {
    console.log("\nAplicando aumento de 10%...\n");
    
    produtos.forEach(function(produto) {
        produto.preco *= 1.10; // Aumenta 10%
    });
    
    mostrarTabela();
    console.log("Preços atualizados com sucesso!");
}

var readline = require('readline');
var rl = readline.createInterface({
    input: process.stdin,
    output: process.stdout
});

function menu() {
    console.clear();
    console.log("=== Sistema de Ajuste de Preços ===");
    mostrarTabela();
    
    rl.question("Deseja aumentar os preços em 10%? (s/n): ", function(resposta) {
        if (resposta.toLowerCase() === 's') {
            aumentarPrecos();
            rl.question("\nPressione Enter para sair...", function() {
                rl.close();
            });
        } else {
            console.log("\nOperação cancelada.");
            rl.close();
        }
    });
}
menu();
rl.on('close', function() {
    console.log("\nPrograma encerrado.");
    process.exit(0);
});
