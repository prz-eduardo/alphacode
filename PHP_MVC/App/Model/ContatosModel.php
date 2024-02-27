<?php
namespace App\Model;

use App\DAO\ContatosDAO;


class ContatosModel
{
    public $id, $nome, $datanasc, $email, $profissao, $telefone, $celular, $whatsapp, $enviaremail,$sms;

    public $rows;

    public function save()
    {

        $dao = new ContatosDAO();

        if(empty($this->id))
        {
            $dao->insert($this);
        } else {
            $dao->update($this);
        }
    }
    
    public function getALLRows()

    {

        $dao = new ContatosDAO();

        $this->rows =$dao->select();
    }

    public function getById(int $id)
    {

        $dao = new ContatosDAO();

        $obj = $dao->selectById($id);

        if($obj)
        {
            return $obj;   
        } else {
            return new ContatosModel();
        }
    }

    public function delete(int $id)
    {

        $dao = new ContatosDAO();

        $dao->delete($id);
    }

}