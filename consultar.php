<?php 
require __DIR__ . '/vendor/autoload.php';

use \App\Entity\Produto;

    // validação do ID
    if (!isset($_GET['id']) or !is_numeric($_GET['id'])) {
    header('location:index.php?status=error');
    exit;
    }
 
 
    // consulta produto
    $obProduto =  Produto::getProduto($_GET['id']);
 
 
    //validar a Produto
    if (!$obProduto instanceof Produto) {
        header('location:index.php?status=error');
        exit;
    }
    
 
                        

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/footer.php';
include __DIR__ . '/includes/consulta.php';