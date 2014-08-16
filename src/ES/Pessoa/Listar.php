<?php

namespace ES\Pessoa;
use ES\Connection\Conn;

class Listar {

    private $db;
            
    function __construct(Conn $db) {
        $this->db = $db->Connect();
    }
    
    public function Listar(){
        $query = "SELECT * FROM clientes";
        $stmt = $this->db->prepare($query);
        $stmt->execute();                
        return $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);                        
    }

    
}
