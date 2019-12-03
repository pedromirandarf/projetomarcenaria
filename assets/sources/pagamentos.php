<?php

class Pagamento{

    $data;
    $valor;
    $obs;
    $formaDePagamento;
    $idUsuario;
    $idCliente;

    function __construct()
    {
        $this->data=NULL;
        $this->valor=NULL;
        $this->obs=NULL;
        $this->formaDePagamento=NULL;
        $this->idUsuario=NULL;
        $this->idCliente=NULL;
    }

    function inserePagamento(Pagamento $pagamento, $Usuario, $Cliente)
    {
        
        $conn =new mysqli('localhost','root','','marcenaria');
        
        if ($conn->connect_error) {
            die("Por algum motivo a inscrição não foi efetuada, tente novamente mais tarde.");
        }
        
        

        $verifica = "SELECT id FROM usuarios WHERE nome = '$Usuario' ";
        $aux= $conn->query($verifica);
        $row = $aux->fetch_assoc();
        $pagamento->idUsuario = $row["id"];

        $verifica = "SELECT id FROM clientes WHERE nome = '$Cliente' ";
        $aux= $conn->query($verifica);
        $row = $aux->fetch_assoc();
        $pagamento->idCliente = $row["id"];
        
        $Data = $pagamento->data;
        $Valor = $pagamento->valor;
        $Forma = $pagamento->forma;
        $Obs = $pagamento->obs;
        $id_cliente = $pagamento->idCliente;
        $id_usuario = $pagamento->idUsuario;

        $sql = "INSERT INTO pagamentos(data,valor,obs,forma_pagamento,usuarios_id,clientes_id) 
        VALUES ('$Data','$Valor','$Obs','$Forma','$id_usuario','$id_cliente')";
        if($conn->query($sql))
        {
            header("Location: pagamentos_cadastro.php");
        }else 
        {echo "erro" . " " . mysqli_error($conn);}
    }
}



?>