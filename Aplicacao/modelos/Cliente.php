<?php

abstract class Cliente
{
    
    //atributos
    protected int $id;
    protected string $nomeSocial;
    protected string $email;
    
    //tostring
    public function __toString() 
    {
        return sprintf("%d- %s | %s | %s | %s | %s\n", $this->id, $this->getTipo(), $this->nomeSocial, $this->getIdentificacao(), $this->getNroDoc(), $this->email);
    }
    
    //metodos
    public abstract function getIdentificacao();
    public abstract function getNroDoc();
    public abstract function getTipo();
    
    //getset

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getNomeSocial()
    {
        return $this->nomeSocial;
    }

    public function setNomeSocial($nomeSocial): self
    {
        $this->nomeSocial = $nomeSocial;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }
}