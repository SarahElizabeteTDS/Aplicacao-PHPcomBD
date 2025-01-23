<?php

require_once("modelos/Cliente.php");
require_once("modelos/ClientePF.php");
require_once("modelos/ClientePJ.php");

require_once("util/conexao.php");

class clienteDAO
{
    public function inserirCliente(Cliente $cliente)
    {
        $sql = "INSERT INTO clientes(tipo, nome_social, email, nome, cpf, razao_social, cnpj) VALUES (?,?,?,?,?,?,?)";
    
        $con = conexao::getCon();
        
        $stm = $con->prepare($sql);
        if($cliente instanceof ClientePF)
        {
            $stm->execute(array($cliente->getTipo(), $cliente->getNomeSocial(), $cliente->getEmail(), $cliente->getNome(), $cliente->getCpf(), null, null));
        }else if($cliente instanceof ClientePJ)
        {
            $stm->execute(array($cliente->getTipo(), $cliente->getNomeSocial(), $cliente->getEmail(), null, null, $cliente->getRazaoSocial(), $cliente->getCnpj()));
        }
    }
    
    public function listarClientes()
    {
        $sql = "SELECT * FROM clientes";
        
        $con = conexao::getCon();
        
        $stm = $con->prepare($sql);
        $stm->execute();
        
        $registros = $stm->fetchAll();
        
        $clientes = $this->mapClientes($registros);
        
        return $clientes;
    }
    
    private function mapClientes(array $registros)
    {
        $clientes = array();
        
        foreach ($registros as $reg) 
        {
            $cliente = null;
            
            if ($reg['tipo'] == 'F') 
            {
                $cliente = new ClientePF($reg['nome'], $reg['cpf'], $reg['nome_social'], $reg['email']);
            }else {
                $cliente = new ClientePJ(($reg['razao_social']), ($reg['cnpj']), ($reg['nome_social']), ($reg['email']));
            }
            $cliente->setId($reg['id']);
            array_push($clientes, $cliente);
        }
        return $clientes;
    }
}