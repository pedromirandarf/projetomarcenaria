<?php

    $conn = mysqli_connect('localhost','root','','marcenaria');
    mysqli_set_charset($conn, 'utf8');
    if ($conn->connect_error) {
        die("Por algum motivo a inscrição não foi efetuada, tente novamente mais tarde.");
    }
    if(isset($_POST['Email']))
    {
        extract($_POST);
        $Senha = md5($Senha);
        $sql = "INSERT INTO Usuarios(nome, senha,cpf,endereco,email) 
			VALUES ('".$Nome."','".$Senha."','".$CPF."','".$Endereco."','".$Email."')";
        $conn->query($sql);
        header('Location: index.php');
    }

?>