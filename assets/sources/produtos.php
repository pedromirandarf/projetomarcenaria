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
        $con = mysql_connect('localhost','root','');
        mysql_select_db('marcenaria_bd', $con)

        $query = "INSERT INTO produtos (nome, serie, lote, tipo, fornecedor, preco_compra, preco_venda, quantidade, obs) 
        VALUES ('$produto.nome', '$produto.serie', '$produto.lote', '$produto.tipo','$produto.fornecedor',
        '$produto.precoCompra', '$produto.precoVenda', '$produto.quantidade', '$produto.obs') ";
        $result = mysql_query($query);
    }
}



?>