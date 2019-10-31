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
        $nome = NULL;
        $email = NULL;
        $cpf = NULL;
        $rg = NULL;
        $telefone = NULL;
        $endereco = NULL;

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