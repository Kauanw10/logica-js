const botao = document.querySelector('button')
const lista = document.querySelector('ul')
const users = []

function processarDados() {

    let nome =  document.getElementById('nome').value
    let idade = document.getElementById('idade').value 
    let profissao = document.getElementById('profissao').value
    let online = document.getElementById('status').checked

    novoUsuario = { nome, idade, profissao, online }

    processarCadastro(users,novoUsuario)

}

function processarCadastro(users, novoUsuario){
    users.push(novoUsuario)
    desenharLista()
}


function desenharLista(){
    lista.innerHTML = ""
    for (let index = 0; index < users.length; index++) {
        const usuariosCadastrados = users[index];
        if (usuariosCadastrados.online) {     
            mostrarOnline(lista,usuariosCadastrados,index)
        } else{
            mostrarOffline(lista,usuariosCadastrados,index)
        }
    }
}

function deletarCadastro(posicao) {
    users.splice(posicao, 1)
    desenharLista()
}

function mostrarOnline(lista, usuariosCadastrados, index) {
        lista.innerHTML += ` <li>Usuário: ${usuariosCadastrados.nome}, Idade: ${usuariosCadastrados.idade}, Profissão: ${usuariosCadastrados.profissao} <button onclick="deletarCadastro(${index})">excluir</button> 🟢 Online</li>`
}

function mostrarOffline(lista, usuariosCadastrados, index) {
        lista.innerHTML += ` <li>Usuário: ${usuariosCadastrados.nome} <button id="excluir" onclick="deletarCadastro(${index})">excluir</button> -  Offline🔴</li>`
}

botao.onclick = processarDados