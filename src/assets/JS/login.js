let verSenha = document.querySelector('#verSenha');



// -- Ação Click = Para Visualizar campo senha e alterar ICONE
verSenha.addEventListener('click', ()=> {
    let inputSenha = document.querySelector('#senha-login')

    if(inputSenha.getAttribute('type') == 'password') {
        inputSenha.setAttribute('type', 'text')
        verSenha.classList.replace('bi-eye-slash', 'bi-eye');
    }else {
        inputSenha.setAttribute('type', 'password')
        verSenha.classList.replace('bi-eye', 'bi-eye-slash');
    }
})




// -- Função para verificar se campo de email foi preenchido
function EnviarEmailRecuperacao() {
    
    let inputEmailModal = document.getElementById("email-login-recupera");

    let emailValue = inputEmailModal.value.trim();

    if (emailValue === "") {
        alert("Por favor, digite seu e-mail.");
        inputEmailModal.focus();

    } else {
        alert("Email enviado com sucesso!!");
        inputEmailModal.value = ''; // Limpa o campo

        let modal = bootstrap.Modal.getInstance('#recuperacao-modal');
            // Fecha o modal
            if (modal) {
                modal.hide();
            }
    }
}