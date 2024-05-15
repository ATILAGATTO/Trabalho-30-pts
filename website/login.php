<?php
include_once 'config/constantes.php';
include_once 'config/conexao.php';
include_once 'func/funcoes.php';

?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Entrar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="./css/style.css" rel="stylesheet">
</head>

<body class="bg-dark text-white">
  <div class="card border border-4  border-light bg-dark text-white text-center position-absolute top-50 start-50 translate-middle">
    <div class="card-header">
      <h1>Entrar</h1>
      <!-- <?php
            // $options = [
            //     'cost' => 12,
            // ];
            // $senha = '12345678';
            // $senhaHash = password_hash($senha, PASSWORD_BCRYPT, $options);
            // echo $senhaHash;
            ?> -->

    </div>
    <form action="#" method="post">
      <div class="card-body border border-light">
        <div class="mb-3">
          <label for="nome" class="form-label">Nome</label>
          <input type="text" class="form-control" id="nome" name="nome">
        </div>
        <div class="mb-3">
          <label for="whatsapp" class="form-label">Contato</label>
          <input type="text" class="form-control" name="whatsapp" id="whatsapp">
        </div>
        <div class="mb-3">
          <label for="senha" class="form-label">Senha</label>
          <input type="password" class="form-control" id="senha" name="senha">
        </div>
      </div>
      <div class="alert alert-danger text-center" style="display:none;" role="alert" id="erromsg"></div>
      <div class="card-footer text-body-secondary">
        <button type="button" onclick="fazerlogin()" class="btn btn-primary">Salvar</button>
      </div>
    </form>
  </div>


  <script src="./js/login.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>