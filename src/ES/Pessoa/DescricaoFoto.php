<?php

namespace ES\Pessoa;

class DescricaoFoto {
    
    private $descricao;
    private $foto;
    
    function __construct($descricao, $foto) {
        $this->descricao = $descricao;
        $this->foto = $foto;
    }
    
    public function getDescricao() {
        return $this->descricao;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setFoto($foto) {
        $this->foto = $foto;
    }






}
