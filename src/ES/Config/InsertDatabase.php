<?php

namespace ES\Config;
use ES\Connection\Conn;

class InsertDatabase {

    private $db;
            
    function __construct(Conn $db) {
        $this->db = $db->Connect();
    }
    
    public function Persist(){
        $query = "INSERT INTO clientes VALUES(NULL, :type,:foto,:name,:cpf,:cnpj,:razao_social,:address,:number,:city,:uf,:billing_address,:billing_city,:billing_uf,:billing_number,:description,:percent)";
        $stmt = $this->db->prepare($query);
        
        $stmt->bindValue(":type", "Fisica", \PDO::PARAM_STR);
        $stmt->bindValue(":foto", "http://placehold.it/130x130", \PDO::PARAM_STR);
        $stmt->bindValue(":name", "Juliana", \PDO::PARAM_STR);
        $stmt->bindValue(":cpf", "305.132.018-82", \PDO::PARAM_STR);
        $stmt->bindValue(":cnpj", NULL, \PDO::PARAM_STR);
        $stmt->bindValue(":razao_social", NULL, \PDO::PARAM_STR);
        $stmt->bindValue(":address", "Rua Durvalino", \PDO::PARAM_STR);
        $stmt->bindValue(":number", "35", \PDO::PARAM_STR);
        $stmt->bindValue(":city", "Cruzeiro", \PDO::PARAM_STR);
        $stmt->bindValue(":uf", "RJ", \PDO::PARAM_STR);
        $stmt->bindValue(":billing_address", "Rua das Flores", \PDO::PARAM_STR);        
        $stmt->bindValue(":billing_city", "Lavrinhas", \PDO::PARAM_STR);
        $stmt->bindValue(":billing_uf", "SP", \PDO::PARAM_STR);
        $stmt->bindValue(":billing_number", "48", \PDO::PARAM_STR);
        $stmt->bindValue(":description", "teste de descrição", \PDO::PARAM_STR);
        $stmt->bindValue(":percent", "6", \PDO::PARAM_INT);
        
        $stmt->execute();            
        
    }
        
}
