<?php 
require __DIR__ . '/vendor/autoload.php';

use \App\Entity\Produto;

 $produtos = Produto::getProdutos();

         $resultados = '' ;

                foreach($produtos as $produto) 
                    $resultados .= '<tr>
                    <td>'.$produto->id.'</td>
                    <td>'.$produto->descricao.'</td>
                    <td>'.$produto->quantidade.'</td>
                    <td>'.$produto->preco.'</td>
                    
                    <td>

                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <a href="editar.php?id='.$produto->id.'" class="btn btn-warning" > Alterar </a>
                    <a href="ver.php?id='.$produto->id.'" class="btn btn-primary"> Consultar  </a>
                    <a href="excluir.php?id='.$produto->id.'"> <button type="button" class="btn btn-danger">Excluir</button> </a>

                    </div>
                    
                    </td>
                </tr>';
                
                
                

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/footer.php';
include __DIR__ . '/includes/produtos.php';