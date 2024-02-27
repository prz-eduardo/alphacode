<?php

namespace App\DAO;
use \PDO;

class DAO 
{
    protected $conexao;

    public function __construct()
    {
        try {
            $dsn = "mysql:host=localhost:3306;dbname=db_mvc";
            $this->conexao = new PDO($dsn, 'root', '4865');
        } catch (\PDOException $e) {
            echo 'Erro na conexão com o banco de dados: ' . $e->getMessage();
        }
    }
}
