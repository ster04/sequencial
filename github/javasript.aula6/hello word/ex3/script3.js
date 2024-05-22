//usar Estrutura condicionais (if/else):
//a)solicite ao usuario que insira sua idade .se a idade for maior ou igual a 18,exiba
//"voce e maior de idade".caso contrario,exiba 'voce e menor de idade

let idade=parseInt(prompt("digite sua idade"));

if(idade>=18){
    console.log("voce e maior de idade.");
}else{
    console.log("voce e menor de idade.");
}


//b)solicite ao usuario que insira  um número .verifique se o numero é positivo,
//negativo ou zero e exibida o resultado.

let numero = parseInt(prompt("digite um numero"));

if (numero >0 ){
    console.log("o numero é posititivo.");
}else if(numero< 0){
    console.log("o numero e negativo.");
}else{
    console.log("o numero e 0!")
}
