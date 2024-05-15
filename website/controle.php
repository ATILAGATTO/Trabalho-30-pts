<?php
include_once 'config/constantes.php';
include_once 'config/conexao.php';
include_once 'func/funcoes.php';

$controle = filter_input(INPUT_POST, 'controle', FILTER_SANITIZE_STRING);




if (isset($controle) && !empty('$controle')) {
    switch ($controle) {
        case 'listarproduto';
            include_once 'produto.php';
            break;
            
        case 'listaradm';
            include_once 'administrador.php';
            break;

            case 'contato';
            include_once 'contato.php';
            break;

            case 'listarbanner';
            include_once 'banner.php';
            break;

            case 'excCliente';
            include_once 'clienteexcluir.php';
            break;

            case 'listarservicos';
            include_once 'servicos.php';
            break;

            case 'servicosAdd';
            include_once 'servicosadd.php';
            break;

            case 'servicosalt';
            include_once 'servicoalt.php';
            break;

            case 'excServico';
            include_once 'servicoexcluir.php';
            break;


            case 'listarpedido';
            include_once 'pedido.php';
            break;

            case 'admadd';
            include_once 'administradoradd.php';
            break;

            case 'admAlt';
            include_once 'administradoralt.php';
            break;

            case 'excadm';
            include_once 'admexc.php';
            break;

            case 'pedidoadd';
            include_once 'pedidoadd.php';
            break;


            case 'excpedido';
            include_once 'excpedido.php';
            break;



          
       


        default:
            echo 'Pagina nao encontrada';
    }
}





//
//$acao = filter_input(INPUT_POST,'acao',FILTER_SANITIZE_STRING);
//
//$acaoid = filter_input(INPUT_POST,'acaoid',FILTER_SANITIZE_NUMBER_INT);
//
//$controle = filter_input(INPUT_POST,'controle',FILTER_SANITIZE_STRING);
//
//$controleGet = filter_input(INPUT_GET,'controleGet',FILTER_SANITIZE_STRING);
//
//switch ($acao){
//
//
//};
//
//
//switch ($controle){
//        case 'listarCliente';
//        include_once 'cliente.php';
//        break;
//            case 'listarGenero';
//                include_once 'genero.php';
//                break;
//                    case 'listarFilme';
//                        include_once 'filme.php';
//                        break;
//
//
//};
?>