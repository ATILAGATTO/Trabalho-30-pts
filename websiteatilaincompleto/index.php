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
    <title>Página principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="./css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-dark text-white">

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <!-- <a class="nav-link" href="#"></a> -->
                    </li>
                    <li class="nav-item dropdown">
                        <!-- <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul> -->
                    </li>
                    <li class="nav-item">
                        <!-- <a class="nav-link disabled" aria-disabled="true">Disabled</a> -->
                    </li>
                </ul>
                <div class="btn-group" role="group" aria-label="Basic example">
                   <a href="entrar.php"><button type="button" class="btn btn-outline-success">Entrar</button></a> 
                   <a href="cadastrar.php"><button type="button" class="btn btn-outline-danger">cadastrar</button></a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./img/banner.jpg" class="d-block w-100 banner" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/banner.jpg" class="d-block w-100 banner" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./img/banner.jpg" class="d-block w-100 banner" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row mt-3">
            <?php
            $rece = listarTabela('idproduto, nome, foto, descricao, idadm, cadastro, alteracao, ativo, valor', 'produto', 'idproduto');
            // print_r ($rece);
            if ($rece != 'Vazio') {
                foreach ($rece as $itemproduto) {
                    $idproduto = $itemproduto->idproduto;
                    $nome = $itemproduto->nome;
                    $foto = $itemproduto->foto;
                    $descricao = $itemproduto->descricao;
                    $idadm = $itemproduto->idadm;
                    $cadastro = $itemproduto->cadastro;
                    $alteracao = $itemproduto->alteracao;
                    $ativo = $itemproduto->ativo;
                    $valor = $itemproduto->valor;
            ?>
                    <div class="col-md-3 text-center">
                        <img src="./img/<?php echo $foto ?>" class="produto">
                        <hr>
                        <h5>R$ <?php echo $valor?></h5>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>


    <footer class="containner-fluid mt-3 foter">
        <div class="row">
            <div class="col-md-6">
                <h5>Siga-nos</h5>
                <ul>
                    <li><i class="bi bi-instagram"></i><a class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="#"> Instagram</a></li>
                    <li><i class="bi bi-facebook"></i><a class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="#"> Facebook</a></li>
                    <li><i class="bi bi-twitter-x"></i><a class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="#"> Twiter</a></li>
                    <li><i class="bi bi-youtube"></i><a class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="#"> Youtube</a></li>
                </ul>
            </div>
            <div class="col-md-6">
                <h5>Precisa de suporte?</h5>
                <ul>
                    <li><i class="bi bi-whatsapp"></i><a class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="#"> WhatsApp</a></li>
                    <li><i class="bi bi-telephone"></i><a class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="#"> Telefone</a></li>
                    <li><i class="bi bi-chat-square"></i><a class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="#"> Chat</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15100.204062613111!2d-42.00375527143476!3d-18.884817840723688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb1a989eae2efb5%3A0xa8b05ada22dd5416!2sAlvorada!5e0!3m2!1spt-BR!2sbr!4v1715624803648!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>