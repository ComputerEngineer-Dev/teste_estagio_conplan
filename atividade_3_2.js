// Atividade 3.2 Por Willian Gonçalves
var readline = require('readline');

var rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout
});


var mensagem = "Texto original.";

function mostrarEstado() {
  console.log("\nEstado atual:");
  console.log("Parágrafo: " + mensagem);
  console.log("\nOpções:");
  console.log("1 - Alterar texto");
  console.log("2 - Sair");
}

function alterarTexto() {
  mensagem = "Texto alterado com sucesso!";
  console.log("\n>>> Texto alterado!");
}

function menu() {
  mostrarEstado();
  
  rl.question("\nEscolha uma opção (1-2): ", function(opcao) {
    switch(opcao) {
      case '1':
        alterarTexto();
        menu();
        break;
      case '2':
        rl.close();
        break;
      default:
        console.log("Opção inválida!");
        menu();
    }
  });
}
console.log("=== Simulador de Alteração de Texto ===");
menu();

rl.on('close', function() {
  console.log("\nPrograma encerrado.");
  process.exit(0);
});
