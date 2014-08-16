<?php

namespace ES\Pessoa\Tipo;
use ES\Pessoa\DescricaoFoto as Descricao;
use ES\Inter\iCliente;

class Fisica extends Descricao implements iCliente {

    private $id;
    private $tipo;
    private $nome;
    private $cpf;
    private $sexo;
    private $endereco = array();
    private $enderecoCobranca = array();

    function __construct($id, $tipo, $nome, $cpf, $sexo) {
        $this->id = $id;
        $this->tipo = "Fisica";
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->sexo = $sexo;
    }

    public function getId() {
        return $this->id;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }


    
    /* Interface Classificação */
    public function getPercentual() {
        return $this->percentual;
    }

    public function setPercentual($percentual) {
        $this->percentual = $percentual;
    }

    /* Interface Endereço Padrão */
    public function setEnd($endereco) {
        $this->endereco[] = $endereco;
    }

    public function getEnd() {
        $endereco = "";
        foreach ($this->endereco as $key => $endereco) {            
            $endereco = $endereco->getRua()." - ".$endereco->getCidade()." / ".$endereco->getEstado();            
            return $endereco;
        }
    }    
    
    /* Interface Endereço Cobrança */
    public function setEndCobranca($enderecoCobranca) {
        $this->enderecoCobranca[] = $enderecoCobranca;
    }

    public function getEndCobranca() {
        $enderecoCobranca = "";
        foreach ($this->enderecoCobranca as $key => $enderecoCobranca) {            
            $enderecoCobranca = $enderecoCobranca->getRua()." - ".$enderecoCobranca->getCidade()." / ".$enderecoCobranca->getEstado();            
            return $enderecoCobranca;
        }
    }

}
