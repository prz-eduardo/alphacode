<?php

namespace App\Controller;

use App\Model\ContatosModel;

class ContatosController extends Controller
{

    public static function index() 
    {

        $model = new ContatosModel();
        $model->getALLRows();

        parent::render('Contatos/ListaContatos', $model);
        
    }

    public static function form() 
    {
        
        $model = new ContatosModel();

        if (isset($_GET['id'])) 
            $model = $model->getById((int)$_GET['id']);

            parent::render('Contatos/FormContatos', $model);
    }


    public static function save() 
    {

        $model = new ContatosModel();

        $model->id = $_POST['id'];

        $model->nome = $_POST['nome'];
        $model->datanasc = $_POST['datanasc'];
        $model->email = $_POST['email'];
        $model->profissao = $_POST['profissao'];
        $model->telefone = $_POST['telefone'];
        $model->celular = $_POST['celular'];
        $model->whatsapp = isset($_POST['whatsapp']) ? 1 : 0;
        $model->sms = isset($_POST['sms']) ? 1 : 0;
        $model->enviaremail = isset($_POST['enviaremail']) ? 1 : 0;

        $model->save();

        header('Location: /contatos');

    }

    public static function delete()
    {

        $model = new ContatosModel();

        $model->delete((int)$_GET['id']);

        header('Location: /contatos');
    }
}