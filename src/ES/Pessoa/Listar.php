<?php

namespace ES\Pessoa;
use ES\Pessoa\Tipo\Fisica;

class Listar extends Fisica {

    private $db;
            
    function __construct(\PDO $db) {
        $this->db = $db;
    }
    
    public function Listar(){
        $query = "SELECT * FROM clientes";
        $stmt = $this->db->prepare($query);
        $stmt->execute(array(
            //'name' => 
        ));
        
        
        return $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                        
    }

    
}
