// VARIAVEIS
let blog = document.getElementById('blog-form');
let blogEmail = document.getElementById('blog-email');

// MASCARA NO CAMPO DE TELEFONE
$('#blog-telefone').mask('(00) 0000-00009');
telefone.addEventListener('keyup', () => {
    if (telefone.value.length == 15) {
        $('#telefone').mask('(00) 00000-0000');
    } else {
        $('#telefone').mask('(00) 0000-00009');
    }
});

// eventoEmail(blogEmail, 'Por favor, informe um endereço de email válido.');

// EVENTO SUBMIT
blog.addEventListener('submit', evento => {
    if(validaEmail(blogEmail, 'Por favor, informe um endereço de email válido.')){
        enviaFormulario();
        return;
    }
    evento.preventDefault();
});

// EVENTOS DE KEYDOWN E BLUR NO INPUT EMAIL
blogEmail.addEventListener('blur', () => {
    let regexEmail = /^([\w-]\.?)+@([\w-]+\.)+([A-Za-z]{2,4})+$/;
    let testEmail = regexEmail.test(blogEmail.value);

    if (testEmail === false) {
        exibeMensagem(blogEmail, 'Por favor, informe um endereço de email válido.');
        return false;
    }
    removeMensagem(blogEmail);
    return true;
});

blogEmail.addEventListener('keydown', () => {
        removeMensagem(blogEmail);
    });

// VALIDAÇÃO DO INPUT EMAIL
function validaEmail(input, mensagem) {
    let regexEmail = /^([\w-]\.?)+@([\w-]+\.)+([A-Za-z]{2,4})+$/;
    let testEmail = regexEmail.test(input.value);

    if (testEmail === false) {
        exibeMensagem(input, mensagem);
        input.focus();
        return false;
    }
    removeMensagem(input);
    return true;
}
// FUNÇÃO QUE EXIBE MENSAGEM DE ERRO ABAIXO DO INPUT
function exibeMensagem(input, mensagem){
    input.parentElement.classList.add('invalido');
    input.parentElement.querySelector('.msg-erro').textContent = mensagem;
}
// FUNÇÃO QUE REMOVE MENSAGEM DE ERRO ABAIXO DO INPUT
function removeMensagem(input){
    input.parentElement.classList.remove('invalido');
    input.parentElement.querySelector('.msg-erro').textContent = '';
}
// EXIBE MENSAGEM DE SUCESSO APÓS ENVIO DO FORMULÁRIO
function enviaFormulario(){
    $("#blog-form").fadeOut();
    $("#msg-sucesso").fadeIn();
}