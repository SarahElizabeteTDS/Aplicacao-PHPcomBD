<?php

require_once("Cliente.php");

class ClientePJ extends Cliente
{
    //atributos
    private string $razaoSocial;
    private string $cnpj;
    
    public function __construct($rs,$cnpj,$ns,$em)
    {
        $this->razaoSocial = $rs;
        $this->cnpj = $cnpj;
        $this->nomeSocial = $ns;
        $this->email = $em;
    }
    
    //metodos 
    public function getIdentificacao()
    {
        return $this->razaoSocial;
    }
    public function getNroDoc()
    {
        return $this->cnpj;
    }
    public function getTipo()
    {
        return "J";
    }
    
    //getesetts

    public function getRazaoSocial(): string
    {
        return $this->razaoSocial;
    }

    public function setRazaoSocial(string $razaoSocial): self
    {
        $this->razaoSocial = $razaoSocial;

        return $this;
    }
    
    public function getCnpj(): string
    {
        return $this->cnpj;
    }

    public function setCnpj(string $cnpj): self
    {
        $this->cnpj = $cnpj;

        return $this;
    }
}