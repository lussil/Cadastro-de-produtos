<?php 
require __DIR__ . '/vendor/autoload.php';

use App\Entity\Produto;
use App\Database;


if (empty($_POST['descricao']) and empty($_POST['preco']) and empty($_POST['quantidade'])  ) {
    $error = "preencha todos os campos";  
} else {

    $descricao      = $_POST['descricao'];
    $preco          = $_POST['preco'];
    $quantidade     = $_POST['quantidade'];

    $obProduto = new Produto;

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