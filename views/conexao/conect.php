<?php

    if(isset($_POST['Email']))
    {
        $conn =new mysqli('localhost','root','','marcenaria');
        
        if ($conn->connect_error) {
            die("Por algum motivo a inscrição não foi efetuada, tente novamente mais tarde.");
        }
        $Email = $_POST['Email'];
        $Nome = $_POST['Nome'];
        $Senha = md5($_POST['Senha']);
        $Endereco = $_POST['Endereco'];
        $CPF = $_POST['CPF'];
        $sql = "INSERT INTO usuarios(nome,senha,cpf,endereco,email) VALUES ('$Nome','$Senha','$CPF','$Endereco','$Email')";
        if($conn->query($sql))
        {
            header("Location: ../../index.php");
        }else 
        {echo "erro" . " " . mysqli_error($conn);}
    }
    

?>