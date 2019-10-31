<?php

class Usuarios{

    $nome;
    $senha;
    $cpf;
    $email;

    function __construct()
    {
        $nome = NULL;
        $email = NULL;
        $cpf = NULL;
        $senha = NULL;

    }

    function insereUsuario()
    {
        $usuario = new Usuario;();


        $usuario.nome = $_POST["nome"];
        $usuario.email = $_POST["email"];
        $usuario.cpf = $_POST["cpf"];
        $usuario.senha = $_POST["senha"];

        $this->insereUsuarioBD($cliente);
    }

    function insereUsuarioBD(Usuario $usuario)
    {
        $con = mysql_connect('localhost','root','');
        mysql_select_db('marcenaria_bd', $con)

        $query = "INSERT INTO usuarios (nome, senha, cpf, endereco) VALUES ('$usuarios.nome', 
        '$usuarios.senha', '$usuarios.cpf','$usuarios.endereco') ";
        $result = mysql_query($query);
        
        if ($result)
        
    }

}


?>