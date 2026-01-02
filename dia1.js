let nome = "Kauan"
let idade = 20
let bool = true


// Testando
console.log(nome)

console.log("---------------------------")

if (idade >= 18) {
    console.log(`Maior de idade = ${bool}`)
} else {
    bool = false
    console.log(`Maior de idade = ${bool}`)
    
}

console.log("---------------------------")

let a = 10
for (let i = 1; i <= a; i++) {
    const n = a[i];
    console.log(i)
}

function somar(a,b){
    res = a+b
    return res
}

console.log("---------------------------")

console.log(somar(20,10))