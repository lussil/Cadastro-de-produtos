<?php 

$mensagem = '';

if (isset($_GET['status'])) {
    switch ($_GET['status']) {
        case 'success':
            $mensagem = '<div  class="alert alert-success"> Ação executada com sucesso</div>';
            break;

            case 'error':
                $mensagem = '<div  class="alert alert-danger">Ação Não executada</div>';
                break;
    
    }
}

?>

<div class="container col-8">

    <?= $mensagem ?>

    <a href="cadastrar.php" class="btn btn-primary"> Novo produto</a>
    <table class="table ">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Descrição</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Preço</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>




            <?php     $resultados = strlen($resultados) ? $resultados : '<tr>
                                                       <td colspan="6" class="text-center">
                                                              Nenhuma produto cadastrado </td>
                                                                         </tr>';

            ?>

            <?=$resultados?>
            <main>

        </tbody>
    </table>
    <!--  botões para ações caso o outro não funcione
    <a href="editar.php?id='.$produto->id.'"> <button type="button" class="btn btn-warning">alterar</button> </a>
    <a href="ver.php?id='.$produto->id.'"> <button type="button" class="btn btn-primary">consultar </button> </a>
    <a href="excluir.php?id='.$produto->id.'"> <button type="button" class="btn btn-danger">Excluir</button> </a> -->
</div>