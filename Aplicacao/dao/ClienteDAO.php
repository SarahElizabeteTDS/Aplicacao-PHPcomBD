<?php

require_once("../modelos/Cliente.php");
require_once("../modelos/ClientePF.php");
require_once("../modelos/ClientePJ.php");

class clienteDAO
{
    public function inserirCliente(Cliente $cliente)
    {
        $sql = "INSERT INTO clientes(tipo, nome_social, email, nome, cpf, razao_social, cnpj) VALUES(?,?,?,?,?,?,?)";
    }
}