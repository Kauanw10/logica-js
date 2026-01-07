const button = document.querySelector('button')
const ul = document.querySelector('ul')
const ulOnline = document.getElementById('listaOnline')
const users = []

function processarCadastro() {

    let nome =  document.getElementById('nome').value
    let idade = document.getElementById('idade').value 
    let profissao = document.getElementById('profissao').value
    let online = document.getElementById('status').checked

    novoUsuario = { nome, idade, profissao, online }

    users.push(novoUsuario)
    desenharLista()
}

function desenharLista(){
    ul.innerHTML = ""
    for (let index = 0; index < users.length; index++) {
        const element = users[index];
        if (element.online) {     
            ul.innerHTML += ` <li>Usuário: ${element.nome}, Idade: ${element.idade}, Profissão: ${element.profissao} <button onclick="deletarCadastro(${index})">excluir</button> 🟢 Online</li>`
        } else{
            ul.innerHTML += ` <li>Usuário: ${element.nome} <button id="excluir" onclick="deletarCadastro(${index})">excluir</button> -  Offline🔴</li>`
        }
    }
}

function deletarCadastro(posicao) {
    users.splice(posicao, 1)
    desenharLista()
}

button.onclick = processarCadastro