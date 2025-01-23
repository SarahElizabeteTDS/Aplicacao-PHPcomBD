<?php

require_once("modelos/Cliente.php");
require_once("modelos/ClientePF.php");
require_once("modelos/ClientePJ.php");
require_once("dao/ClienteDAO.php");


//testeCON
//require_once("util/conexao.php");
//quando usa static, nao precisa criar objeto, chama direto da classe
//$con = conexao::getCon();
//print_r($con);

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
            //objeto persistido
            $clientePF = new ClientePF(readline("Informe o nome: "), readline("Informe o CPF: "),readline("Informe o nome social: "),readline("Informe o email: "));
            //chamar o método do DAO para colocar o objeto no BD
            $clienteDAO = new clienteDAO();
            $clienteDAO->inserirCliente($clientePF);
            print "Cliente PF cadastrado com sucesso!";
            break;
        case 2:
            //objeto persistido
            $clientePJ= new ClientePJ(readline("Informe a razao social: "), readline("Informe o cnpj: "),readline("Informe o nome social: "),readline("Informe o email: "));
            //chamar o método do DAO para salvar no BD
            $clienteDAO = new clienteDAO();
            $clienteDAO->inserirCliente($clientePJ);
            print "Cliente PJ cadastrado com sucesso!";
            break;
        case 3:
            $clienteDAO = new clienteDAO();
            $clientes = $clienteDAO->listarClientes();
            
            //exibir os dados
            foreach($clientes as $c)
            {
                printf ("%d - %s | %s | %s | %s | %s\n",$c->getId(), $c->getTipo(), $c->getNomeSocial(), $c->getIdentificacao(), $c->getNroDoc(), $c->getEmail());
            }
            break;
        case 4:
            //pelo ID, recebe no readline, chamar o metodo que retorna o objeto cliente no BD
            //clienteDAO = new ClienteDao(); $cliente = $clienteDao->buscarporID(o ID lido);
            //verificar se o cliente retornado é diferente de null, se for, mostrar os dados, se nao, mostrar mensagem dizendo que o clinete nao foi encontrado
            break;
        case 5:
            break;
        default:
            print "opcao invalida!";
    }
} while ($opcao != 0);