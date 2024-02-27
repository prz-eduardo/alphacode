<?php

use \App\Controller\ContatosController;

//include("Controller/ContatosController.php");
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) 
{
    case '/':
        ContatosController::form();
        ContatosController::index();
    break;

    case '/contatos':
        ContatosController::form();
        ContatosController::index();
    break;

    case '/contatos/form':
        ContatosController::form();
        ContatosController::index();
    break;

    case '/contatos/form/save':
        ContatosController::save();
    break;

    case '/contatos/delete':
        ContatosController::delete();
    break;

    default:
        echo 'erro 404';
    break;
}

