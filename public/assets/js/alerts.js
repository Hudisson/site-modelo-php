/** Obter URL e Parâmetros */

const urlParametros = new URLSearchParams(window.location.search);
const searchParams = new URLSearchParams(location.search);

const nomeParametro = urlParametros.get('status');
const divAlert = document.querySelector("#divAlert");
const divAlertDanger = document.querySelector("#divAlertDanger");

if(nomeParametro == "sucesso"){
    MensagemSucesso();
}

if(nomeParametro == "campo_vazio"){
    campoVazio();
}

/**-----------------------Funções-------------------------- */
// Mostra o alert bootstrap success quando houver exito no envio da mensagem.
function MensagemSucesso(){
    divAlert.classList.toggle('hide');
}

// Mostra o alert bootstrap danger quando huver o envio de campos obrigatórios vazio.
function campoVazio(){
    divAlertDanger.classList.toggle('campo_vazio');
}



