<?php

class Clientes{

    $nome;
    $email;
    $cpf;
    $rg;
    $telefone;
    $endereco;

    function __construct()
    {
        $this->nome = NULL;
        $this->email = NULL;
        $this->cpf = NULL;
        $this->rg = NULL;
        $this->telefone = NULL;
        $this->endereco = NULL;

    }

    function insereCliente()
    {
        $cliente = new Cliente();


        $cliente.nome = $_POST["nome"];
        $cliente.email = $_POST["email"];
        $cliente.cpf = $_POST["cpf"];
        $cliente.rg = $_POST["rg"];
        $cliente.telefone = $_POST["telefone"];
        $cliente.endereco = $_POST["endereco"];

        $this.insereClienteBD($cliente);
    }

    function insereClienteBD(Clientes $cliente)
    {
        $con = mysql_connect('localhost','root','');
        mysql_select_db('marcenaria_bd', $con)

        $query = "INSERT INTO clientes (nome, email, rg, cpf, endereco, telefone) VALUES ('$clientes.nome', 
        '$clientes.email', '$clientes.rg','$clientes.cpf', '$clientes.endereco', '$clientes.telefone')";
        $result = mysql_query($query);
        
        if ($result)

    }
}



?>