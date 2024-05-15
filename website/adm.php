<?php
include_once 'config/constantes.php';
include_once 'config/conexao.php';
include_once 'func/funcoes.php';
?>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="css/dash.css">
</head>

<body>
  <input type="checkbox" id="check">
  <label for="check">
    <i class="fas fa-bars" id="btn"></i>
    <i class="fas fa-times" id="cancel"></i>
  </label>
  <div class="sidebar bg-dark">
    <header class="bg-dark">Menu</header>
    <a onclick="carregarConteudo('listarproduto')" href="#"  style="text-decoration:none;">
      <i class="bi bi-archive"></i>
      <span>Produto</span>
    </a>
    <a onclick="carregarConteudo('listaradm')" href="#" style="text-decoration:none;">
      <i class="bi bi-person-fill-gear"></i>
      <span>Adm</span>
    </a>
    <a  onclick="carregarConteudo('contato')"  href="#" style="text-decoration:none;">
      <i class="bi bi-telephone"></i>
      <span class="link">Contato</span>
    </a>
    <a  onclick="carregarConteudo('listarbanner')"href="#" style="text-decoration:none;">
    <i class="bi bi-images"></i>
      <span>Banner</span>
    </a>

    <a href="logout.php" style="text-decoration:none;">
      <i class="bi bi-box-arrow-left"></i>
      <span class="link">Sair</span>
    </a>

  </div>
</body>

<div class="frame" id="conteudo">

  <h2 class="colorir">Bem vindo adm</h2> 



</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="js/func.js"></script>
</body>