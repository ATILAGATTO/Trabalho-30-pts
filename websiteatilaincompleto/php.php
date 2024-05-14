<?php
include_once 'config/constantes.php';
include_once 'config/conexao.php';
include_once 'func/funcoes.php';

$conn = conectar();

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$nome = $dados['nome'];
$whatsapp = $dados['whatsapp'];
$senha = $dados['senha'];

$retornoValidar = validarSenhaCriptogtografia('idcontato, nome, whatsapp, cadastro, alteracao, ativo, senha', 'contato', 'whatsapp', 'senha', "$whatsapp", "$senha", 'ativo', 'A');

if ($retornoValidar) {
  if ($retornoValidar == 'usuario') {
    echo json_encode(['success' => false, 'message' => 'Usuário inválido']);
  } else if ($retornoValidar == 'telefone') {
    echo json_encode(['success' => false, 'message' => 'Número não cadastrado']);
  } else {
    $_SESSION['idcontato'] = $retornoValidar->idcontato;
    $_SESSION['nome'] = $retornoValidar->nome;
    $_SESSION['whatsapp'] = $retornoValidar->whatsapp;
    echo json_encode(['success' => true, 'message' => 'Login efetuado com sucesso! Redirecionando']);
  }
} else {
  echo json_encode(['success' => false, 'message' => 'Nome ou telefone inválidos']);
}