<div class="container col-8">

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
           
                <?=$resultados?>

        </tbody>
    </table>
    <!--  botões para ações caso o outro não funcione
    <a href="editar.php?id='.$produto->id.'"> <button type="button" class="btn btn-warning">alterar</button> </a>
    <a href="ver.php?id='.$produto->id.'"> <button type="button" class="btn btn-primary">consultar </button> </a>
    <a href="excluir.php?id='.$produto->id.'"> <button type="button" class="btn btn-danger">Excluir</button> </a> -->


</div>