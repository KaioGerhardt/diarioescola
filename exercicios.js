// código primeiro exercicio
clientes.forEach(element => {
    let nome = element.nome
    let format = nome.split(" ")
    console.log(`${format[format.length - 1]}, ${format[0]}`);
    
});

//código da atividade dois de js

var numero = "5(1)9-876-543-21";

var formata = numero.replace(/-/g, "").replace("(", "").replace(")", "").split("")

let ddd = formata[0] + "" + formata[1]
let digito = formata
let numeroFormatado = `${formata[3]}${formata[4]}${formata[5]}${formata[6]}-${formata[7]}${formata[8]}${formata[9]}${formata[10]}`

let novoNumero = `(${ddd})_${formata[2]}_${numeroFormatado}`

// a ordem da execucao do log é c e d
// a function d não tem o metodo resolve()
