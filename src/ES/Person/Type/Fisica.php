<?php

namespace ES\Person\Type;
use ES\Inter\iClient;
use ES\Person\Addresss\Address;

class Fisica extends Address implements iClient {

    private $id;
    private $Type;
    private $Image;
    private $nome;
    private $cpf;
    private $percent;
    
     function __construct($id, $Type, $nome, $cpf) {
        $this->id = $id;
        $this->Type = "Fisica";
        $this->nome = $nome;
        $this->cpf = $cpf;
    }
    
    
    public function getId() {
        return $this->id;
    }

    public function getType() {
        return $this->Type;
    }

    public function getImage() {
        return $this->Image;
    }
        
    public function getNome() {
        return $this->nome;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setType($Type) {
        $this->Type = $Type;
    }

    public function setImage($Image) {
        $this->Image = $Image;
    }
        
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }
        
    public function getPercent() {
        return $this->percent;
    }

    public function setPercent($percent) {
        $this->percent = $percent;
    }

}
