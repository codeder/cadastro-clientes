<?php

namespace ES\Person;
use ES\Connection\Conn;

class ListClients {

    private $db;
            
    function __construct(Conn $db) {
        $this->db = $db->Connect();
    }
    
    public function ListC(){
        $query = "SELECT * FROM clientes";
        $stmt = $this->db->prepare($query);
        $stmt->execute();                
        return $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);                        
    }

    
}
