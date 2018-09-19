<?php

include "carrinho/funcoes.php";
include "database/consultas.php";

$acao =$_GET['acao'];

if (validaAcaoCarrinho($acao)){
    $id = isset($_GET['id'])?(int)$_GET['id']:false;
        switch ($acao){
            case "adicionar":
                if(!is_int($id)||$id ==0){
                    die("parametro invalid");
                }else{
                    $produto = $pegarProdutoPorId($id);
                    adicionarProdutoCarrinho($produto);
                    header('location:carrinho.php');
                }
                break;
            case "excluir":
                if (!is_int($id)|| $id == 0 ){
                    die("parametros invalido!");
                }else {
                    excluirProdutoCarrinho($id);
                    header("location:carrinho.php");
                }
        }

    }else{
        die ("acao invalid");
    }
