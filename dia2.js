let numRandom =  Math.floor(Math.random() * 11)
const nota = numRandom

console.log(nota)

console.log("----------------------------")

if(nota >= 8){
    console.log(`Nota: ${nota} - APROVADO`)
} else if((nota <= 7) && (nota >= 5)){
    console.log(`Nota: ${nota} - RECUPERAÇÃO`)
} else{
    console.log(`Nota: ${nota} - REPROVADO`)
}

console.log("----------------------------")

let a = 20
for (let i = 1; i <= a; i++) {
    const n = a[i];
    if (i % 2 === 0) {
        console.log(`${i} é PAR`)
    } else{
        console.log(`${i} é IMPAR`)
    }
}

console.log("----------------------------")

const numArray = [8, 25, 37, 88, 76]
let num = 5

console.log(numArray)

function maiorNumero(){
    let numeroMaior = 0
    for (let index = 0; index < num; index++) {
        const element = numArray[index];
        if (element > numeroMaior) {
            numeroMaior = element
        }
    }
    return numeroMaior
}

console.log(`O Maior número é: ${maiorNumero(numArray)}`)

