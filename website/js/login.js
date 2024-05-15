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
    else if (whatsapp === '') {
        erromsg.style.display = 'block';
        erromsg.innerHTML = 'O campo de contato está vazio.Por favor preencha o contato.';
        return;
    } else if (senha === '') {
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
                    window.location.href = 'index.php';
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



