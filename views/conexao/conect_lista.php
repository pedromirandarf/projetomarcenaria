<?php

    if(isset($_POST['Email']))
    {
        $conn =new mysqli('localhost','root','','marcenaria');
        
        if ($conn->connect_error) {
            die("Por algum motivo a inscrição não foi efetuada, tente novamente mais tarde.");
        }
        $Email = $_POST['Email'];
        $Nome = $_POST['Nome'];
        $RG = $_POST['RG'];
        $Endereco = $_POST['Endereco'];
        $CPF = $_POST['CPF'];
        $Telefone = $_POST["Telefone"];
        $sql = "INSERT INTO clientes(nome,email,rg,cpf,endereco,telefone) VALUES ('$Nome','$Email','$RG','$CPF','$Endereco','$Telefone')";
        if($conn->query($sql))
        {
            header("Location: ../clientes_cadastro.php");
        }else 
        {echo "erro" . " " . mysqli_error($conn);}
    }
    

?>