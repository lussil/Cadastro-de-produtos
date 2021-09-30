<?php 
require __DIR__ . '/vendor/autoload.php';

use App\Entity\Produto;
use App\Database;

define('TITLE' , 'Editar produto');


$error = '<div class="alert alert-warning" role="alert"> <div>' ;


// validação do ID
if (!isset($_GET['id']) or !is_numeric($_GET['id'])) {
    header('location:index.php?status=error');
    exit;
 }
 
 
 // consulta vaga
 $obProduto =  Produto::getProduto($_GET['id']);
 
 
  //validar a Produto
  if (!$obProduto instanceof Produto) {
    header('location:index.php?status=error');
    exit;
  }



if (isset($_POST['descricao'], $_POST['preco'] , $_POST['quantidade'])) {

    $descricao      = $_POST['descricao'];
    $preco          = $_POST['preco'];
    $quantidade     = $_POST['quantidade'];

  

    $obProduto->descricao = $descricao;
    $obProduto->preco = $preco;
    $obProduto->quantidade = $quantidade;
    
    $obProduto->atualizar();

    header('location:index.php?status=success');
    exit;
} 


include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/footer.php';
include __DIR__ . '/includes/formulario.php';