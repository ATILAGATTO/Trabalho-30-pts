<?php
include_once 'config/constantes.php';
include_once 'config/conexao.php';
include_once 'func/funcoes.php';
    
if(isset($_Get['id']) && !empty($_Get['id'])){
    $idget = $_Get['id'];
}
    
?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="bgbody">
    <nav class="navbar navbar-expand-lg bg-warning navBar mb-5 fonte ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./img/logo.png" class="logo" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link activem " aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cadastro.php" <?php if (isset($idUsuarioSession)) {
                                                                    echo ('style="display: none"');
                                                                } ?>>Cadastre-se</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php" <?php if (isset($idUsuarioSession)) {
                                                                    echo ('style="display: none"');
                                                                } ?>>Login</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Nome do user
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="adm.php">Painel adm</a></li>
                            <li><a class="dropdown-item" href="logout.php">Sair</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2 bimputbusca" type="search" placeholder="Busacar produtos" aria-label="Search">
                    <button class="btn btn-outline-dark  bimputbusca" type="submit"><i class="bi bi-search"></i></button>
                </form>
            </div>
        </div>
    </nav>


    <div class="container">
        <div class="row">
            <?php
                $catalogo = listarTabela('idProdutos, nome, foto, preco, descricao, ativo, alteracao', 'produtos', 'idprodutos');
                if ($catalogo != 'Vazio') {
                    foreach ($catalogo as $itemprodutos) {
                        $idProdutos = $itemprodutos->idProdutos;
                        $nome = $itemprodutos->nome;
                        $foto = $itemprodutos->foto;
                        $preco = $itemprodutos->preco;
                        $descricao = $itemprodutos->descricao;
                        $ativo = $itemprodutos->ativo;
                        $alteracao = $itemprodutos->alteracao;
                if($idget == $idProdutos){
            
            ?>
            <div class="col-md-6">
                <img src="./img/<?php echo $foto; ?>.jpg" class="card-img-top" alt="...">
            </div>
            <div class="col-md-6 bg-white banner">
                <div class="row"> 
                    <h3 class="text-center mt-5"><?php echo $nome; ?></h3>  
                </div>
                <div class="row m-5">
                <?php echo $descricao; ?>
                </div>
                <div class="row m-5">
                <?php echo $preco; ?>
                </div>
                <div class="row text-center m-5">
                    <button type="button" class="btn btn-success" >Comprar</button>
                </div>
            </div>
            <?php
                }}}
            ?>
        </div>
    </div>

    <footer class="bg-black text-white pt-5 pb-4 mt-3">

        <div class="container text-center text-md-left">

            <div class="row text-center text-md-left">

                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">

                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">SuperBarato</h5>
                    <p>Na SuperBarato, a sua paixão pelo preço perfeito se torna realidade. Venha nos visitar e descubra o que nos torna únicos.</p>

                </div>



                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">

                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Sobre</h5>

                    <p>
                        <a href="#" class="text-white" data-bs-toggle="modal" data-bs-target="#sobreNos" style="text-decoration: none;"> Sobre nos</a>
                    </p>

                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;"> Criadores</a>
                    </p>

                    <p>
                        <a href="#" class="text-white" style="text-decoration: none;"> Desenvolvedores</a>
                    </p>

                </div>

                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">

                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contatos</h5>

                    <p>
                        <i class="fas fa-home mr-3"></i> Governador Valadares ,BRA
                    </p>

                    <p>
                        <i class="fas fa-envelope mr-3"></i> Contato@gmail.com.br
                    </p>

                    <p>
                        <i class="fas fa-phone mr-3"></i> 33 984238065
                    </p>

                    <p>
                        <i class="fas fa-phone mr-3"></i> 33 984263972
                    </p>

                </div>

            </div>

            <hr class="mb-4">

            <div class="row align-items-center">

                <div class="col-md-7 col-lg-8 ">

                    <p>copyright ©2024 Todos os direitos são reservados pela Empresa

                        <a href="#" style="text-decoration: none;">

                            <strong class="text-warning">SuperBarato</strong>

                    </p></a>

                </div>

                <div class="col-md-5 col-lg-4">

                    <div class="text-center text-md-right">

                        <ul class="list-unstyled list-inline">

                            <li class="list-inline-item">

                                <a href="https://www.facebook.com/" class="btn-floating btn-sm text-white fab fa-facebook linha" style="font-size: 17px"></a>

                            </li>

                            <li class="list-inline-item">

                                <a href="https://www.twitter.com/" class="btn-floating btn-sm text-white fab fa-twitter linha" style="font-size: 17px"></a>

                            </li>

                            <li class="list-inline-item">

                                <a href="https://www.google.com/" class="btn-floating btn-sm text-white fab fa-google-plus linha" style="font-size: 17px"></a>

                            </li>

                            <li class="list-inline-item">

                                <a href="https://www.linkedin.com/" class="btn-floating btn-sm text-white fab fa-linkedin-in linha" style="font-size: 17px"></a>

                            </li>

                            <li class="list-inline-item">

                                <a href="https://www.github.com/" class="btn-floating btn-sm text-white fab fa-github linha" style="font-size: 17px "></a>

                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

        <!-- Modal sobre Nos -->
        <div class="modal fade" id="sobreNos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">ShopCar</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-dark">
                        <strong>

                            Desde o seu surgimento em 2024, a ShopCar tem sido a sua principal parceira no universo automobilístico. Nossa missão é simples: fornecer aos nossos clientes uma experiência excepcional, oferecendo uma ampla seleção de veículos de alta qualidade e um atendimento incomparável.
                            Na ShopCar, entendemos que a compra de um carro é mais do que uma transação - é a realização de um sonho. Por isso, nossa equipe dedicada está aqui para guiá-lo em cada etapa do processo, desde a escolha do veículo ideal até a conclusão da compra. Nosso compromisso com a transparência e a honestidade garante que você possa confiar em nós para oferecer apenas os melhores produtos e serviços.
                            Além disso, na ShopCar, estamos sempre em busca de inovação. Estamos constantemente atualizando nossa seleção de veículos para garantir que você tenha acesso às últimas tecnologias e tendências do mercado automobilístico.
                            Venha nos visitar e descubra por que tantos clientes escolhem a ShopCar para realizar seus sonhos automobilísticos. Na ShopCar, a sua paixão por carros se torna realidade.


                        </strong>
                    </div>
                    <div class="modal-footer mb-4">
                    </div>
                </div>
            </div>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15100.521495110781!2d-41.96922905!3d-18.881296550000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb1a7370873e045%3A0x1e35304ef623624e!2sCh%C3%A1cara%20recanto%20bela%20vista%20gv!5e0!3m2!1spt-BR!2sbr!4v1715703496847!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>