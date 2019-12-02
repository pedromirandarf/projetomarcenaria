<?php

    if(isset($_POST['Data']))
    {
        $conn =new mysqli('localhost','root','','marcenaria');
        
        if ($conn->connect_error) {
            die("Por algum motivo a inscrição não foi efetuada, tente novamente mais tarde.");
        }
        
        $Data = $_POST['Data'];
        $Valor = $_POST['Valor'];
        $Forma = $_POST['Forma'];
        $Obs = $_POST['Obs'];
        $Usuario = $_POST['Usuario'];
        $Cliente = $_POST["Cliente"];
        $verifica = "SELECT id FROM usuarios WHERE nome = '$Usuario' ";
        $aux= $conn->query($verifica);
        $row = $aux->fetch_assoc();
        $id_usuario = $row["id"];
        $verifica = "SELECT id FROM clientes WHERE nome = '$Cliente' ";
        $aux= $conn->query($verifica);
        $row = $aux->fetch_assoc();
        $id_cliente = $row["id"];
        $sql = "INSERT INTO pagamentos(data,valor,obs,forma_pagamento,usuarios_id,clientes_id) 
        VALUES ('$Data','$Valor','$Obs','$Forma','$id_usuario','$id_cliente')";
        if($conn->query($sql))
        {
            header("Location: pagamentos_cadastro.php");
        }else 
        {echo "erro" . " " . mysqli_error($conn);}
    }
    

?>