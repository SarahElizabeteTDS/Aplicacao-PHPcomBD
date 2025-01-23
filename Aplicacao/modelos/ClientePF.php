<?php

require_once("Cliente.php");

class ClientePF extends Cliente
{
    //atributos
    private string $nome;
    private string $cpf;
    
    public function __construct($n,$cpf,$ns,$em)
    {
        $this->nome = $n;
        $this->cpf = $cpf;
        $this->nomeSocial = $ns;
        $this->email = $em;
    }
    
    //metodos 
    public function getIdentificacao()
    {
        return $this->nome;
    }
    public function getNroDoc()
    {
        return $this->cpf;
    }
    public function getTipo()
    {
        return "F";
    }
    
    //getesetts

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }
}