<?php

namespace ES\Person\Addresss;

class Address {

    private $address;
    private $number;
    private $city;
    private $uf;
    
    private $billing_address;
    private $billing_number;
    private $billing_city;
    private $billing_uf;
    
    public function getAddress() {
        return $this->address;
    }

    public function getNumber() {
        return $this->number;
    }

    public function getCity() {
        return $this->city;
    }

    public function getUf() {
        return $this->uf;
    }
    
    public function getBilling_address() {
        return $this->billing_address;
    }

    public function getBilling_number() {
        return $this->billing_number;
    }

    public function getBilling_city() {
        return $this->billing_city;
    }

    public function getBilling_uf() {
        return $this->billing_uf;
    }    
        
    public function SetAddress($address,$number,$city,$uf){
        $this->address = $address;
        $this->number = $number;
        $this->city = $city;
        $this->uf = $uf;
    }
    
    public function SetAddressBilling($billing_address,$billing_number,$billing_city,$billing_uf){
        $this->billing_address = $billing_address;
        $this->billing_number = $billing_number;
        $this->billing_city = $billing_city;
        $this->billing_uf = $billing_uf;
    }    

}
