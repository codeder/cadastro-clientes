<?php

namespace ES\Pessoa;

class Listar {

    private $db;
            
    function __construct(\PDO $db) {
        $this->db = $db;
    }
    
    public function Listar(){
        $query = "SELECT * FROM clientes";
        $stmt = $this->db->prepare($query);
        $stmt->execute();                
        return $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);                        
    }

    
}
