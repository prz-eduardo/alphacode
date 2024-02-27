<?php

namespace App\Controller;

class Controller
{
protected static function render($view, $model = null)
{
    $arquivo_view = "View/modules/$view.php";

    if (file_exists($arquivo_view)) {
        if (is_array($model) || is_object($model)) {
            include $arquivo_view;
        } else {
            exit('Model não é uma array ou objeto válido');
        }
    } else {
        exit('Arquivo da View não encontrado');
    }
}
}