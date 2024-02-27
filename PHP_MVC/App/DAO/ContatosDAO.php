<?php 

namespace App\DAO;

use App\Model\ContatosModel;
use \PDO;

class ContatosDAO extends DAO
{
    public function __construct()
    {
     parent::__construct();
    }

    public function insert(ContatosModel $model)
    {
        $sql = 'INSERT INTO Contatos (nome, datanasc, email, profissao, telefone, celular, whatsapp, sms, enviaremail) VALUES (?,?,?,?,?,?,?,?,?)';

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->datanasc);
        $stmt->bindValue(3, $model->email);
        $stmt->bindValue(4, $model->profissao);
        $stmt->bindValue(5, $model->telefone);
        $stmt->bindValue(6, $model->celular);
        $stmt->bindValue(7, $model->whatsapp) ? 1 : 0;;
        $stmt->bindValue(8, $model->sms) ? 1 : 0;;
        $stmt->bindValue(9, $model->enviaremail) ? 1 : 0;;

        $stmt->execute();

    }

    public function update(ContatosModel $model)
    {
        $sql = 'UPDATE Contatos SET nome=?, datanasc=?, email=?, profissao=?, telefone=?, celular=?, whatsapp=?, sms=?, enviaremail=? WHERE id=? ';

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->datanasc);
        $stmt->bindValue(3, $model->email);
        $stmt->bindValue(4, $model->profissao);
        $stmt->bindValue(5, $model->telefone);
        $stmt->bindValue(6, $model->celular);
        $stmt->bindValue(7, $model->whatsapp) ? 1 : 0;;
        $stmt->bindValue(8, $model->sms) ? 1 : 0;;
        $stmt->bindValue(9, $model->enviaremail) ? 1 : 0;;

        $stmt->bindValue(10, $model->id);

        $stmt->execute();


    }

    public function select()
    {
       $sql = "SELECT * FROM Contatos";
       
       $stmt = $this->conexao->prepare($sql);

       $stmt->execute();

       return $stmt->fetchAll(PDO::FETCH_CLASS);

    }

    public function selectById(int $id)
    {

        $sql = "SELECT * FROM Contatos WHERE id = ?";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("App\Model\ContatosModel");

    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM Contatos WHERE id = ? ";
        
        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();


    }
        

}