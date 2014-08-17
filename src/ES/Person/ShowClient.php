<?php

namespace ES\Person;
use ES\Connection\Conn;

class ShowClient {

    private $db;
            
    function __construct(Conn $db) {
        $this->db = $db->Connect();
    }
    
    public function ShowC(){
        $query = "SELECT * FROM clients WHERE id=:id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue("id", $_GET['id'], \PDO::PARAM_INT);
        $stmt->execute();                
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        if($result){
            return $result;
        }else{
            return false;
        }
    }

    
}