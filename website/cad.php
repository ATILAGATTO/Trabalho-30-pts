<?php
include_once('config/conexao.php');
include_once('config/constantes.php');
include_once('func/funcoes.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['nomeAdd'];
    $whatsapp = $_POST['whatsappAdd'];
    $senha = $_POST['senha'];
    $senhaHash = password_hash($senha, PASSWORD_BCRYPT, $options);

    $retornoinsert = insertTresId('contato', 'nome, whatsapp, senha', "$nome", "$whatsapp", "$senhaHash");


    if ($retornoinsert > 0) {
        echo json_encode(['success' => true, 'message' => "Cliente cadastrado com sucesso"]);
    } else {
        echo json_encode(['success' => false, 'message' => "Cliente não cadastrado ! ErroR Bd"]);
    }
}

echo '<script>alert("Cliente cadastrado com sucesso!"); window.location.href = "index.php";</script>';
