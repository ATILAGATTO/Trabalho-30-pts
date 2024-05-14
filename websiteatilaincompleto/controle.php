<?php
include_once 'config/constantes.php';
include_once 'config/conexao.php';
include_once 'func/funcoes.php';

$controle = filter_input(INPUT_POST, 'controle', FILTER_SANITIZE_STRING);


if (isset($controle) && !empty($controle)) {

    switch ($controle) {
        case '';
            include_once 'bemv.php';
            break;
        case 'listaCliente';
            include_once 'cliente.php';
            break;
        case 'listaPizza';
            include_once 'pizza.php';
            break;
        case 'clienteAdd';
            include_once 'clienteAdd.php';
            break;
        case 'clienteAlt';
            include_once 'clienteAlt.php';
            break;
        case 'clienteExc';
            include_once 'clienteExc.php';
            break;
        case 'pizzaAdd';
            include_once 'pizzaAdd.php';
            break;
        case 'pizzaAlt';
            include_once 'pizzaAlt.php';
            break;
        case 'pizzaExc';
            include_once 'pizzaExc.php';
            break;
        default:
            echo 'Menu inesistente';
    }
} else {
    echo 'Pagina inesistente';
}
