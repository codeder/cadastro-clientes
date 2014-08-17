<?php

namespace ES\Config;
use ES\Connection\Conn;

use ES\Inter\iClient;
use ES\Person\Type\Fisica;
use ES\Person\Type\Juridica;
use ES\Person\Addresss\Address;


class InsertDatabase {

    private $db;
            
    function __construct(Conn $db) {
        $this->db = $db->Connect();
    }
    
    public function Persist(iClient $c){
        
        try {
            
        $this->db->beginTransaction();        
        $query = "INSERT INTO clientes VALUES(NULL, :type,:image,:name,:cpf,:cnpj,:razao_social,"
                . ":address,:number,:city,:uf,"
                . ":billing_address,:billing_number,:billing_city,:billing_uf,"
                . ":percent)";
        
        $stmt = $this->db->prepare($query);
        
        $stmt->bindValue(":type", $c->getType(), \PDO::PARAM_STR);
        $stmt->bindValue(":image", $c->getImage(), \PDO::PARAM_STR);
        $stmt->bindValue(":name", ($c->getType()=="Fisica"?$c->getNome():NULL), \PDO::PARAM_STR);
        $stmt->bindValue(":cpf", ($c->getType()=="Fisica"?$c->getCpf():NULL), \PDO::PARAM_STR);
        $stmt->bindValue(":cnpj", ($c->getType()=="Juridica"?$c->getCnpj():NULL), \PDO::PARAM_STR);
        $stmt->bindValue(":razao_social", ($c->getType()=="Juridica"?$c->getRazaoSocial():NULL), \PDO::PARAM_STR);
        $stmt->bindValue(":address", $c->getAddress(), \PDO::PARAM_STR);
        $stmt->bindValue(":number", $c->getnumber(), \PDO::PARAM_STR);
        $stmt->bindValue(":city", $c->getcity(), \PDO::PARAM_STR);
        $stmt->bindValue(":uf", $c->getuf(), \PDO::PARAM_STR);
        $stmt->bindValue(":billing_address", $c->getBilling_Address(), \PDO::PARAM_STR);        
        $stmt->bindValue(":billing_number", $c->getBilling_number(), \PDO::PARAM_STR);
        $stmt->bindValue(":billing_city", $c->getBilling_city(), \PDO::PARAM_STR);
        $stmt->bindValue(":billing_uf", $c->getBilling_uf(), \PDO::PARAM_STR);                
        $stmt->bindValue(":percent", $c->getPercent(), \PDO::PARAM_INT);
        $stmt->execute();
        
        } catch (\PDOException $e) {            
            echo "Erro ao inserir os dados: ".$e->getMessage();
            $this->db->rollBack();
        }            

    }
    
    public function Flush(){
        $this->db->commit();
        echo "Dados inseridos com sucesso<br>";          
    }
        
}
