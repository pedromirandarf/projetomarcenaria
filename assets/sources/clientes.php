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

    function insereCliente(Clientes $cliente)
    {

        $conn =new mysqli('localhost','root','','marcenaria');
        if ($conn->connect_error) {
            die("Por algum motivo a inscrição não foi efetuada, tente novamente mais tarde.");
        }
        

        $Email = $cliente->email;
        $Nome = $cliente->nome;
        $RG = $cliente->rg;
        $Endereco = $cliente->endereco;
        $CPF = $cliente->cpf;
        $Telefone = $cliente->telefone;
        $sql = "INSERT INTO clientes(nome,email,rg,cpf,endereco,telefone) VALUES ('$Nome','$Email','$RG','$CPF','$Endereco','$Telefone')";
        
        if($conn->query($sql))
        {
            header("Location: clientes_cadastro.php");
        }else 
        {echo "erro" . " " . mysqli_error($conn);}

       
    }

    function pesquisaCliente (Clientes $cliente)
    {

    }

}



?>