function inverterString(str){

    //converter a string em array para poder usar o metodo reverse()
   
    const arrayDeCaracteres=str.split('');

    //inverter o array
    const arrayInvertido=arrayDeCaracteres.reverse();

    //juntar as caracterer invertidos para formar a string invertida
    const stringInvertida=arrayInvertido.join('');

    //retornar a string invertida

    return stringInvertida
}

//exemplo de uso da função

const stringOriginal="Lavinia";
const stringInvertida=inverterString(stringOriginal);
console.log("string original:",stringOriginal);
console.log("string invertida:",stringInvertida);


