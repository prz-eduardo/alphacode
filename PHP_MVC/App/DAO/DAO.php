<?php

namespace App\DAO;
use \PDO;

class DAO 
{
    protected $conexao;

    public function __construct()
    {
        try {
            $dsn = "mysql:host=Localhost:3306;dbname=db_mvc";
            $this->conexao = new PDO($dsn, 'root', 'root');
        } catch (\PDOException $e) {
            echo 'Erro na conexão com o banco de dados: ' . $e->getMessage();
        }
    }
}
