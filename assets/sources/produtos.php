<?php

class Produtos{

    $nome;
    $serie;
    $lote;
    $tipo;
    $fornecedor;
    $precoCompra;
    $precoVenda;
    $quantidade;
    $obs;

    function __construct()
    {
        $this->nome = NULL;
        $this->serie = NULL;
        $this->lote = NULL;
        $this->tipo = NULL;
        $this->fornecedor = NULL;
        $this->precoCompra = NULL;
        $this->precoVenda = NULL;
        $this->quantidade = NULL;
        $this->obs = NULL;
    }
    
    function insereProdutoBD(Produtos $produto)
    {
        $conn =new mysqli('localhost','root','','marcenaria');
        
        if ($conn->connect_error) {
            die("Por algum motivo a inscrição não foi efetuada, tente novamente mais tarde.");
        }
        
        $Nome = $produto->nome;
        $Serie = $produto->serie;
        $Lote = $produto->lote;
        $Tipo = $produto->tipo;
        $Fornecedor = $produto->fornecedor;
        $PrecoC = $produto->precoCompra;
        $PrecoV = $produto->precoVenda;
        $Quantidade = $produto->quantidade;
        $Obs = $produto->obs;
        $sql = "INSERT INTO produtos(nome,serie,lote,tipo,fornecedor,preco_compra,preco_venda,quantidade,obs) 
        VALUES ('$Nome','$Serie','$Lote','$Tipo','$Fornecedor','$PrecoC','$PrecoV','$Quantidade','$Obs')";
        if($conn->query($sql))
        {
            header("Location: ../produtos_cadastro.php");
        }else 
        {echo "erro" . " " . mysqli_error($conn);}
    }
    }
}



?>