<?php

require_once("modelos/Cliente.php");
require_once("modelos/ClientePF.php");
require_once("modelos/ClientePJ.php");

//testeCON
/*require_once("util/conexao.php");
//quando usa static, nao precisa criar objeto, chama direto da classe
$con = conexao::getCon();
print_r($con);*/

do 
{
    print "\n---Cadastro de clientes---\n";
    print "1 - Cadastrar cliente PF\n";
    print "2 - Cadastrar cliente PJ\n";
    print "3 - Listar clientes\n";
    print "4 - Buscar clientes\n";
    print "5 - Excluir cliente\n";
    print "0 - SAIR\n";

    $opcao = readline("Informe o que você deseja: ");
    switch ($opcao) {
        case 1:
            $clientePF = new ClientePF(readline("Informe o nome: "), readline("Informe o CPF: "),readline("Informe o nome social: "),readline("Informe o email: "));
            break;
        case 2:
            $clientePJ= new ClientePF(readline("Informe a razao social: "), readline("Informe o cnpj: "),readline("Informe o nome social: "),readline("Informe o email: "));
            break;
        case 3:
            break;
        case 4:
            break;
        case 5:
            break;
        default:
            print "opcao invalida!";
    }
} while ($opcao != 0);