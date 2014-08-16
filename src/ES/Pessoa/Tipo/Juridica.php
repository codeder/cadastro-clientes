<?php

namespace ES\Pessoa\Tipo;
use ES\Pessoa\DescricaoFoto as Descricao;
use ES\Inter\ICliente as Cliente;

class Juridica extends Descricao implements Cliente {

    private $id;
    private $tipo;
    private $razaoSocial;
    private $nomeFantasia;
    private $cnpj;
    private $endereco = array();
    private $enderecoCobranca = array();

    function __construct($id, $tipo, $razaoSocial, $nomeFantasia, $cnpj) {
        $this->id = $id;
        $this->tipo = "Juridica";
        $this->razaoSocial = $razaoSocial;
        $this->nomeFantasia = $nomeFantasia;
        $this->cnpj = $cnpj;
    }

    public function getId() {
        return $this->id;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getRazaoSocial() {
        return $this->razaoSocial;
    }

    public function getNomeFantasia() {
        return $this->nomeFantasia;
    }

    public function getCnpj() {
        return $this->cnpj;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function setRazaoSocial($razaoSocial) {
        $this->razaoSocial = $razaoSocial;
    }

    public function setNomeFantasia($nomeFantasia) {
        $this->nomeFantasia = $nomeFantasia;
    }

    public function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
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
