<div class="container col-8">


    <h2 class="mt-3">Consulta do produto <?= $obProduto->id ?></h2>
    <form action="" method="post">

        <div class="form-group">

            <ul class="list-group">
                <li class="list-group-item"> Código do produto :     <?= $obProduto->id ?> </li>
                <li class="list-group-item"> Quantidade :            <?= $obProduto->descricao ?></li>
                <li class="list-group-item"> Quantidade :            <?= $obProduto->quantidade ?></li>
                <li class="list-group-item"> Preço : R$              <?= $obProduto->preco ?></li>
                <li class="list-group-item"> Data de criação :       <?php echo date('d/m/Y à\s H:i:s',strtotime($obProduto->data))?></li>

            </ul>




        </div>

        <div class="form-group mt-3">


            <a href="index.php">
                <button type="button" class=' btn btn-primary'>Voltar</button>
            </a>


        </div>

    </form>
</div>