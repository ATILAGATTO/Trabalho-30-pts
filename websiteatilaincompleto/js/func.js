if (document.getElementById("nome")) {
    document.getElementById("nome").focus();
}


function fazerlogin() {

    var nome = document.getElementById("nome").value;
    var whatsapp = document.getElementById("whatsapp").value;
    var senha = document.getElementById("senha").value;
    var erromsg = document.getElementById("erromsg");

    if (nome === '') {
        erromsg.style.display = 'block';
        erromsg.innerHTML = 'O campo de nome está vazio.Por favor preencha o nome.';
        return;
    }
    if (whatsapp === '') {
        erromsg.style.display = 'block';
        erromsg.innerHTML = 'O campo de whatsapp está vazio.Por favor preencha o whatsapp.';
        return;
    }
    if (senha === '') {
        erromsg.style.display = 'block';
        erromsg.innerHTML = 'O campo de senha está vazio.Por favor preencha a senha.';
        return;
    } else if (senha.length < 8) {
        erromsg.style.display = 'block';
        erromsg.innerHTML = 'A senha deve conter 8 dígitos';
        return;
    } else {
        erromsg.style.display = 'none';
    }
    fetch('php.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'nome=' + encodeURIComponent(nome) + '&whatsapp=' + encodeURIComponent(whatsapp) + '&senha=' + encodeURIComponent(senha),
    })
        .then(response => response.json())
        .then(data => {
            console.log(data.message);

            if (data.success) {
                // alert(data.message);
                erromsg.classList.remove('alert-danger');
                erromsg.classList.add('alert-success');
                erromsg.innerHTML = data.message;
                erromsg.style.display = 'block';

                setTimeout(function () {
                    window.location.href = 'painel.php';
                }, 2000);
            } else {
                erromsg.style.display = 'block';
                erromsg.innerHTML = data.message;
            }
        })
        .catch(error => {
            console.error('Erro na requisição', error);
        });
}


function mostrarprocessando() {
    var divprocessando = document.createElement('div');
    divprocessando.id = 'processandodiv';
    divprocessando.style.position = 'fixed';
    divprocessando.style.top = '350px';
    divprocessando.style.left = '1025px';
    divprocessando.style.transform = 'translate(-50%, -50%)';
    divprocessando.innerHTML = '<img src="./img/carregando.gif" class="w-50" " alt="Processando..." title="Processando...">';
    document.body.appendChild(divprocessando);
}


function esconderprocessando() {
    var divprocessando = document.getElementById('processandodiv');
    if (divprocessando) {
        document.body.removeChild(divprocessando);
    }
}

function carregarConteudo(controle) {
    fetch('controle.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'controle=' + encodeURIComponent(controle),
    })
        .then(response => response.text())
        .then(data => {
            document.getElementById('controle').innerHTML = data;
        })
        .catch(error => console.error('Erro na requisição:', error));
}

function cadastrar() {

    var nome = document.getElementById("nomeAdd").value;
    var whatsapp = document.getElementById("whatsappAdd").value;
    var senha = document.getElementById("senhaAdd").value;
    var erromsg = document.getElementById("erromsg");

    if (nome === '') {
        erromsg.style.display = 'block';
        erromsg.innerHTML = 'O campo de nome está vazio.Por favor preencha o nome.';
        return;
    }
    if (whatsapp === '') {
        erromsg.style.display = 'block';
        erromsg.innerHTML = 'O campo de whatsapp está vazio.Por favor preencha o whatsapp.';
        return;
    }
    if (senha === '') {
        erromsg.style.display = 'block';
        erromsg.innerHTML = 'O campo de senha está vazio.Por favor preencha a senha.';
        return;
    } else if (senha.length < 8) {
        erromsg.style.display = 'block';
        erromsg.innerHTML = 'A senha deve conter 8 dígitos';
        return;
    } else {
        erromsg.style.display = 'none';
    }
}

// <-------------------------------------------------Funções Contato------------------------------------------------------------------->

const formcontato = document.getElementById('frmAddcontato');
const btnAddcontato = document.getElementById('btnAddcontato');

if (formcontato) {

    const submitHandler = function (event) {
        event.preventDefault();
        btnAddcontato.disabled = true;
        mostrarprocessando();

        var form = event.target;
        var formData = new FormData(form);
        formData.append('controle', 'contatoAdd');

        fetch('controle.php', {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                console.log(data);
                if (data.success) {
                    alert(data.message);
                } else {
                    alert(data.message);
                }
            })
            .catch(error => {
                console.error('Erro na requisição', error);
            });
    }
    formcontato.addEventListener('submit', submitHandler);
}


function abrirModalEdicaoc(contato, cpf) {
    var contatoEdit = document.getElementById('contatoEdit');
    var cpfEdit = document.getElementById('cpfEdit');
    if (contatoEdit) {
        pizzaEdit.focus();
        contatoEdit.value = contato
        cpfEdit.value = cpf
        abrirFecharModalJs('contatoEdtModal');
    }
}
function abrirFecharModalJs(nomeModal) {
    var modalInstancia = new bootstrap.Modal(document.getElementById(nomeModal));
    modalInstancia.show();
}