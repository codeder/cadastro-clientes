<?php

namespace ES\Pessoa;

class Endereco {
    
    public $rua;
    private $cidade;
    private $estado;
    
    function __construct($rua, $cidade, $estado) {
        $this->rua = $rua;
        $this->cidade = $cidade;
        $this->estado = $estado;
    }
    
    public function getRua() {
        return $this->rua;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function setRua($rua) {
        $this->rua = $rua;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }



    
}
