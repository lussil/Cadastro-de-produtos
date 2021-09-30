<div class="container col-8">

    <h2 class="mt-3 mb-3 "> <?=TITLE ?></h2>
    <form action="" class="row g-3" method="post">

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="descricao" name="descricao" value="<?=$obProduto->descricao ?>">
            <label for="descricao">Descrição</label>
        </div>



        <div class="form-floating mb-3 col-md-6">
            <input type="number" class="form-control" id="preco" step="any" name="preco"value="<?=$obProduto->preco ?>"> 
            <label for="preco"> </label> 
           
        </div>



        <div class="form-floating mb-3 col-md-6">
            <input type="number" class="form-control" id="quantidade" name="quantidade" value="<?=$obProduto->quantidade ?>">
            <label for="quantidade">Quantidade</label>
        </div>


        <div class="form-group mt-3">
            <button type="submit" class="btn btn-success">Enviar</button>
            <a href="index.php" class="btn btn-primary"> Voltar</a>
        </div>




        <?php 
               echo $error;
            ?>
</div>
</form>






</div>