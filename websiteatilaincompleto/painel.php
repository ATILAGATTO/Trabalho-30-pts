<?php
include_once 'config/constantes.php';
include_once 'config/conexao.php';
include_once 'func/funcoes.php';


if ($_SESSION['idcontato']) {
    $idUsuarioSession = $_SESSION['idcontato'];
} else {
    session_destroy();
    header('location: ./entrar.php');
    die();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <div class="bg-dark text-center text-white p-3" style="font-size: x-large;">
        Painel de controle
    </div>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <!-- <a class="nav-link" href="#">Link</a> -->
                    </li>
                    <li class="nav-item dropdown">
                        <!-- <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a> -->
                        <ul class="dropdown-menu">
                            <!-- <li><a class="dropdown-item" href="#">Action</a></li> -->
                            <!-- <li><a class="dropdown-item" href="#">Another action</a></li> -->
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                        </ul>
                    </li>
                    <li class="nav-item">
                        <!-- <a class="nav-link disabled" aria-disabled="true">Disabled</a> -->
                    </li>
                </ul>
                <div class="d-flex">
                    <a class="btn btn-danger" href="logout.php" role="button">sair</a>
                </div>
            </div>
        </div>
    </nav>



    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 bg-dark">
                <div class="d-flex flex-column align-items-center mt-2 p-2 min-vh-100">
                    <div class="text-white text-center" style="width: 300px;">
                        <h1>Menu</h1>
                        <hr>
                    </div>
                    <br>
                    <div class="d-inline-flex gap-1">
                        <button class="btn btn-primary" style="width: 300px;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Button with data-bs-target
                        </button>
                    </div>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body text-center" style="width: 300px;">
                            <button type="button" class="list-group-item list-group-item-action fw-bold" onclick="carregarConteudo('listaCliente')">Cliente</button>
                            <button type="button" class="list-group-item list-group-item-action fw-bold" onclick="carregarConteudo('listaPizza')">Pizza</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col md-9">
                <div id="controle">
                    <h1 class="po">Bem vindo(a)!</h1>
                </div>
            </div>
        </div>
    </div>

    <!------------------------------------Modais do Cliente------------------------------>

    <div class="modal fade" id="clienteAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar cliente</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form name="frmAddCliente" id="frmAddCliente" action="#" method="post">
                        <div class="mb-3">
                            <label for="idCliente" class="form-label">Nome</label>
                            <input type="text" class="form-control form-control-sm" name="idCliente" id="idCliente" placeholder="Digite o nome do cliente" aria-label=".form-control-sm">
                            <label for="idCpf" class="form-label">CPF</label>
                            <input type="text" class="form-control form-control-sm" name="idCpf" id="idCpf" placeholder="Digite o nome do cliente" aria-label=".form-control-sm">
                        </div>
                        <button type="submit" class="btn btn-info" id="btnAddCliente">Adicionar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="clienteEdtModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Alterar cliente</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form name="frmEdtCliente" id="frmEdtCliente" action="#" method="post">
                        <div class="mb-3">
                            <label for="clienteEdit" class="form-label">Cliente</label>
                            <input type="text" class="form-control form-control-sm" name="clienteEdit" id="clienteEdit" placeholder="Digite o nome do cliente" aria-label=".form-control-sm">
                            <label for="cpfEdit" class="form-label">CPf</label>
                            <input type="text" class="form-control form-control-sm" name="cpfEdit" id="cpfEdit" placeholder="Digite o cpf do cliente" aria-label=".form-control-sm">
                        </div>
                        <button type="submit" class="btn btn-info" id="btnEdtCliente">Salvar alterações</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/func.js"> </script>
</body>

</html>