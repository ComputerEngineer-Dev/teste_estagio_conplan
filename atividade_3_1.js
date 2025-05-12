// Atividade 3.1 Por Willian Gonçalves

var numeros = [];
for (var i = 1; i <= 20; i++) {
    numeros.push(i);
}

console.log("Todos os números:", numeros.join(', '));
console.log("\nNúmeros ímpares:");

for (var j = 0; j < numeros.length; j++) {
    if (numeros[j] % 2 === 1) {
        console.log(numeros[j]);
    }
}
