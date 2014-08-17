<?php

namespace ES\Person\Type;
use ES\Inter\iClient;
use ES\Person\Addresss\Address;

class Juridica extends Address  implements iClient {

    private $id;
    private $type;
    private $image;
    private $razaoSocial;
    private $cnpj;
    private $percent;

    function __construct($id, $Type, $razaoSocial, $cnpj) {
        $this->id = $id;
        $this->type = "Juridica";
        $this->razaoSocial = $razaoSocial;
        $this->cnpj = $cnpj;
    }

    public function getId() {
        return $this->id;
    }

    public function getType() {
        return $this->type;
    }

    public function getImage() {
        return $this->image;
    }
        
    public function getRazaoSocial() {
        return $this->razaoSocial;
    }

    public function getCnpj() {
        return $this->cnpj;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function setImage($Image) {
        $this->Image = $Image;
    }
        
    public function setRazaoSocial($razaoSocial) {
        $this->razaoSocial = $razaoSocial;
    }

    public function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    public function getPercent() {
        return $this->percent;
    }

    public function setPercent($percent) {
        $this->percent = $percent;
    }


}
