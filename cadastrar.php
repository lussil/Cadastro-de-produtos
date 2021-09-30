<?php 
require __DIR__ . '/vendor/autoload.php';

use App\Entity\Produto;
use App\Database;

define('TITLE' , 'Cadastrar Produto');

$obProduto = new Produto;

if (empty($_POST['descricao']) or empty($_POST['preco']) or empty($_POST['quantidade'])  ) {
    
    $error = '<div class="alert alert-warning" role="alert"> preencha todos os campos <div>' ;
    
     
} else {

    $descricao      = $_POST['descricao'];
    $preco          = $_POST['preco'];
    $quantidade     = $_POST['quantidade'];

   

    $obProduto->descricao = $descricao;
    $obProduto->preco = $preco;
    $obProduto->quantidade = $quantidade;
    
    $obProduto->cadastrar();

    header('location:index.php?status=success');
    exit;
}


include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/footer.php';
include __DIR__ . '/includes/formulario.php';