// Incluir fixed no header
function navbarFixed() {
  if ($('header').length) {
    $(window).on('scroll', function () {
      var scroll = $(window).scrollTop();
      if (scroll) {
        $("header").addClass("fixed");
      } else {
        $("header").removeClass("fixed");
      }
    });
  };
};
navbarFixed()

// Incluir data-toggle nos links do Gutemberg
function obterLinks() {
  let linkModal = document.querySelectorAll("a[href='#modalConversao']")
  let linkAcesso = document.querySelectorAll("a[href='#modalAcesso']")

  $(linkModal).attr("data-toggle", "modal")
  $(linkAcesso).attr("data-toggle", "modal")
}
obterLinks()

// Mascara de telefone - 10 e 11 digitos
var maskBehavior = function (val) {
  return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
},
  options = {
    onKeyPress: function (val, e, field, options) {
      field.mask(maskBehavior.apply({}, arguments), options);
    }
  };
$('#telefone').mask(maskBehavior, options);

// Validação de telefone - digitos iguais e DDD
$.validator.addMethod('validardigitos', function (value, element) {
  let digitosIguais = /^\((\d)\d\)\s\1{4,5}-\1{4}/;
  let testIguais = digitosIguais.test(value);

  let digitosDDD = /^\(0\w\)/;
  let testDDD = digitosDDD.test(value);

  if (testIguais == true || testDDD == true) {
    return false;
  } else {
    return true;
  }

}, "Telefone inválido! Por favor, verifique o número informado.");

// Validacao
function validarFormulario(formLead) {
  $(formLead).validate({
    rules: {
      nome: {
        required: true,
        minlength: 3,
      },
      email: {
        required: true,
        email: true,
      },
      contato: {
        required: true,
        minlength: 14,
        maxlength: 15,
        validardigitos: true,
      }
    },
    messages: {
      nome: {
        required: "Por favor, insira seu nome",
        minlength: "Seu nome deve conter, pelo menos, 3 caracteres"
      },
      email: {
        required: "Por favor, insira seu e-mail",
        email: "Por favor, inclua um e-mail válido (ex: nome@dominio.com.br)",
      },
      contato: {
        required: "Por favor, insira seu telefone",
        minlength: "Telefone inválido! Seu telefone deve conter no mínimo 10 números",
        maxlength: "Telefone inválido! Seu telefone deve conter no máximo 11 números",
        validardigitos: "Telefone inválido! Por favor, verifique o número informado",
      }
    },
  });
}
validarFormulario('#formLead');

// Scroll após clique
$("#v-pills-tab a").on('click', function (e) {
  e.preventDefault();
  var position = $("#v-pills-tabContent").offset().top;

  $("body, html").animate({
    scrollTop: position - 100
  } /* speed */);
});

// API - Cadastrar lead no Abas
function cadastrarLead(event, form) {
  event.preventDefault();

  var myHeaders = new Headers();
  myHeaders.append("Authorization", "Bearer V1HQV3b/kYquj59KRsu3Ru");

  var raw = new FormData(form)

  var requestOptions = {
    method: 'POST',
    headers: myHeaders,
    body: raw,
    redirect: 'follow'
  };

  fetch("https://api.abas.online/api/table/value/603cdda9f0f8d700125fae6d?actions=true", requestOptions)
    .then(response => response.json())
    .then(result => {
      console.log(result)
      var message = `<div id="msgSuccess" class="alert alert-success text-center" role="alert">Obrigado! Em breve entraremos em contato.</div>`
      return retornoForm(form, message)
    })
    .catch(error => {
      console.log('error', error)
      var message = `<div id="msgErro" class="alert alert-danger text-center" role="alert">Ops! Algo deu errado, por favor tente novamente.</div>`
      return retornoForm(form, message)
    });
}

function retornoForm(form, message) {
  var retorno = document.getElementById('retornoEnvio')

  form.reset()
  retorno.innerHTML = message

  setInterval(function () {
    $('#modalConversao').modal('hide')
  }, 5000)
}

// API - Acessar sistema
// dadosLogin = {
//   username: 'abas@teste.com',
//   password: 'abas@123'
// }

// baseUrlApi = 'https://abas.online/api';
// baseUrlFrontEnd = 'https://abas.online';

// function login() {
//   if (!this.dadosLogin.username || !this.dadosLogin.password) {
//     // Esse alerta deve ser alterado
//     return alert('validation.errorsFound');
//   }

//   const dadosUsuarioLogado = localStorage.profile ? JSON.parse(localStorage.profile) : '';

//   if (dadosUsuarioLogado && dadosUsuarioLogado.username) {
//     this.openApp();
//   }

//   fetch(`${baseUrlAPI}/user/login`, {
//     method: 'POST',
//     headers: {
//       'Content-Type': 'application/json',
//       'Authorization': 'Basic ' + btoa(this.dadosLogin.username + ':' + this.dadosLogin.password)
//     },
//     body: JSON.stringify({
//       username: dadosLogin.username,
//       password: dadosLogin.password
//     })
//   })
//     .then(u => {
//       return u.text();
//     }).then(user => {
//       const userData = JSON.parse(user);
//       this.authSuccess(true, userData, this.dadosLogin.password);
//     })
//     .catch(() => alert('user.login.subTitle'));
// }

// function authSuccess(token, user, password) {
//   if ('error' in user) {
//     alert('Login error');
//     return;
//   }
//   delete user.password;
//   delete user.tokens;
//   localStorage['profile'] = JSON.stringify(user);
//   localStorage['id_token'] = token;
//   localStorage['base_token'] = btoa(user.username + ':' + password);
// }

// function openApp() {
//   window.location.href = `${baseUrlFrontEnd}/workspaces`;
// }