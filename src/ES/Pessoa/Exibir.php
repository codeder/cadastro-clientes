<?php

namespace ES\Pessoa;

class Exibir {

    private $db;
            
    function __construct(\PDO $db) {
        $this->db = $db;
    }
    
    public function Exibe(){
        $query = "SELECT * FROM clientes WHERE id=:id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue("id", $_GET['id'], \PDO::PARAM_INT);
        $stmt->execute();                
        return $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);                        
    }

    
}