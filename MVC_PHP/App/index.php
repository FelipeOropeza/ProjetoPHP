<?php

include 'Controller/PessoaController.php';

$url = isset($_GET['url']) ? $_GET['url'] : '/';

switch ($url) {
    case '/':
        echo "Página inicial";
        break;

    case 'pessoa':
        PessoaController::index();
        break;

    case 'pessoa/form':
        PessoaController::form();
        break;

    case 'pessoa/form/save':
        PessoaController::save();
        break;

    case 'pessoa/delete':
        PessoaController::delete();
        break;

    default:
        echo "Erro 404 - Página não encontrada";
        break;
}