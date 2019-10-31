<?php

class Orcamento{

    $data;
    $validade;
    $precoTotal;
    $obs;
    $idUsuario;
    $idCliente;

    function __construct()
    {
        $data = NULL;
        $validade = NULL;
        $precoTotal = NULL;
        $obs = NULL;
        $idUsuario = NULL;
        $idCliente = NULL;
    }

    function insereOrcamentoBD(Orcamento $orcamento)
    {
        $con = mysql_connect('localhost','root','');
        mysql_select_db('marcenaria_bd', $con)

        $query = "INSERT INTO orcamento (data, validade, preco_total, obs, clientes_id, usuario_id) 
        VALUES ('$orcamento.data', '$orcamento.validade', '$orcamento.precoTotal',
        '$orcamento.obs','$orcamento.idCliente', '$orcamento.idUsuario') ";
        $result = mysql_query($query);
    }
}


?>