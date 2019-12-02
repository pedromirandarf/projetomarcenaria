<?php

    if(isset($_POST['Nome']))
    {
        $conn =new mysqli('localhost','root','','marcenaria');
        
        if ($conn->connect_error) {
            die("Por algum motivo a inscrição não foi efetuada, tente novamente mais tarde.");
        }
        $Nome = $_POST['Nome'];
        $Serie = $_POST['Serie'];
        $Lote = $_POST['Lote'];
        $Tipo = $_POST['Tipo'];
        $Fornecedor = $_POST['Fornecedor'];
        $PrecoC = $_POST["PrecoC"];
        $PrecoV = $_POST["PrecoV"];
        $Quantidade = $_POST["Quantidade"];
        $Obs = $_POST["Obs"];

        $sql = "INSERT INTO produtos(nome,serie,lote,tipo,fornecedor,preco_compra,preco_venda,quantidade,obs) 
        VALUES ('$Nome','$Serie','$Lote','$Tipo','$Fornecedor','$PrecoC','$PrecoV','$Quantidade','$Obs')";
        if($conn->query($sql))
        {
            header("Location: ../produtos_cadastro.php");
        }else 
        {echo "erro" . " " . mysqli_error($conn);}
    }
    

?>