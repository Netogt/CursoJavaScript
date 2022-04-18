//variaveis

var fundofor = document.getElementById('fundfor')
var noteErro = document.getElementById('erroEm')

//functions

function emailEr(){
    noteErro.style.display = 'block'
    noteErro.innerHTML = 'Os campos de E-mail não estão iguais'
    
}
function emailCd(){
    noteErro.innerHTML = 'Esse endereço de E-mail já foi cadastrado'
    noteErro.style.display = 'block'
}


function abrinsc(){
    fundofor.style.display = "block"
    
}

function voltarhome(){
    fundofor.style.display = "none"
}
