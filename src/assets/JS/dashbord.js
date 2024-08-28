let verSenha = document.querySelector('#verSenha');
let verConfirmeSenha = document.querySelector('#verSenhaConfirmar');

let inputNomeUsuario = document.querySelector('#UsuarioNome');
let inputEmailUsuario = document.querySelector('#UsuarioEmail');
let inputSenhaUsuario = document.querySelector('#UsuarioSenha');
let inputConfirmarSenha = document.querySelector('#UsuarioConfirmaSenha');


// let erro = document.getElementsByClassName("msg-erro");
// let tste = document.querySelector('#msg-erro-cat');



verSenha.addEventListener('click', ()=> {
    let inputSenhaPrincipal = document.querySelector('#UsuarioSenha')

    if(inputSenhaPrincipal.getAttribute('type') == 'password') {
        inputSenhaPrincipal.setAttribute('type', 'text')
        verSenha.classList.replace('bi-eye-slash', 'bi-eye');
    }else {
        inputSenhaPrincipal.setAttribute('type', 'password')
        verSenha.classList.replace('bi-eye', 'bi-eye-slash');
    }    
})


verConfirmeSenha.addEventListener('click', ()=> {
    let inputConfirmarSenha = document.querySelector('#UsuarioConfirmaSenha')

    if(inputConfirmarSenha.getAttribute('type') == 'password') {
        inputConfirmarSenha.setAttribute('type', 'text')
        verConfirmeSenha.classList.replace('bi-eye-slash', 'bi-eye');
    }else {
        inputConfirmarSenha.setAttribute('type', 'password')
        verConfirmeSenha.classList.replace('bi-eye', 'bi-eye-slash');
    }
})




function validacaoEmail(field) {
    let usuario = field.value.substring(0, field.value.indexOf("@"));
    let dominio = field.value.substring(field.value.indexOf("@") + 1, field.value.length);

    if ((usuario.length >= 1) &&
        (dominio.length >= 3) &&
        (usuario.search("@") == -1) &&
        (dominio.search("@") == -1) &&
        (usuario.search(" ") == -1) &&
        (dominio.search(" ") == -1) &&
        (dominio.search(".") != -1) &&
        (dominio.indexOf(".") >= 1) &&
        (dominio.lastIndexOf(".") < dominio.length - 1)) {
        // document.getElementById("msgemail").innerHTML = "E-mail válido";
        alert("E-mail valido");
    }
    else {
        // document.getElementById("msgemail").innerHTML = "<font color='red'>E-mail inválido </font>";
        alert("E-mail invalido");
        // inputEmail.focus();
    }
}

function verificarTodosDados() {
    // verificarTamanhoSenha();
    // validacaoEmail(UsuarioEmail);
}





/*
####################################################
             D A S H   C A T E G O R I A
####################################################
*/

function verificarCadastroCategoria() {

    const inputCategoria = document.querySelector('#categoriaNome');
    const msgErro = document.querySelector('#msg-erro-cat');

    if(inputCategoria.value == "") {
        // alert("Favor prencher campo!");
        inputCategoria.classList.add('border-danger');
        msgErro.innerHTML = "Favor preencher o campo!";
        event.preventDefault();
    }else{
        msgErro.innerHTML = "";
        inputCategoria.classList.remove('border-danger');
        salvarCategorias();
    }
}

function salvarCategorias(){
    alert("Categoria Salvar com Sucesso");
}




/*
####################################################
             D A S H   U S U A R I O S
####################################################
*/

function verificarCampoNome(){

    const msgErro = document.querySelector('#msg-erro-nome');

    if(inputNomeUsuario.value.length < 3) {
        inputNomeUsuario.classList.add('border-danger');
        msgErro.innerHTML = "*O Nome deve ter pelo menos 3 caracteres.";
        inputSenha.focus();
        event.preventDefault();
    }
}

function verificarCampoSenha() {

    const msgErro = document.querySelector('#msg-erro1');

    if (inputSenha.value == "") {
        
        inputSenha.classList.add('border-danger');
        msgErro.innerHTML = "Favor preencher o campo!";
        inputSenha.focus();
        event.preventDefault();

    } else if (inputSenha.value.length < 4) {

        inputSenha.classList.add('border-danger');
        msgErro.innerHTML = "A senha deve ter pelo menos 4 caracteres.";
        inputSenha.focus();
        event.preventDefault();

    } else {
        msgErro.innerHTML = "";
        inputSenha.classList.remove('border-danger');
        // salvarUsuarios();
    }
}

function verificarCampoConfirmarSenha() {

    const msgErro = document.querySelector('#msg-erro2');

    if (inputConfirmarSenha.value == "") {
        
        inputConfirmarSenha.classList.add('border-danger');
        msgErro.innerHTML = "Favor preencher o campo!";
        inputConfirmarSenha.focus();
        event.preventDefault();

    }else if(inputConfirmarSenha.value != inputSenha.value) {
        alert("Senhas não conferem, favor verificar campos");

    }else {
        msgErro.innerHTML = "";
        inputConfirmarSenha.classList.remove('border-danger');
        // salvarUsuarios();
    }
}


function salvarUsuarios(){
    // alert("Usuario Cadastrado com Sucesso");
    verificarCampoNome();
}


// function verificarTamanhoSenha() {
    
//     if(inputSenha.value.length < 4) {
//         event.preventDefault();
//         inputSenha.classList.add('border-danger');
//         alert('A senha deve ter pelo menos 4 caracteres.');
//     }else{
//         inputSenha.classList.remove('border-danger');
        
//     }
// }