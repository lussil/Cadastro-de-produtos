<?php

namespace App\Entity;

use \App\Database\Database;
use \PDO;

class Produto{
    // codigo do produto
    public $id;

    // descricao do produto
    public $descricao;

    // quantidade do produto
    public $quantidade;

    // quantidade do produto
    public $preco;

    // data de cração produto
    public $data;


    // metodo para cadastrar produto no banco
    public function cadastrar(){

        // definir a data
        $this->data = date('Y-m-d H:i:s');

        // inserir a vaga no bancdo
        $obDatabase = new Database('produtos');

        $this->id = $obDatabase->insert([
            
            'descricao'     => $this->descricao,
            'preco'         => $this->preco,
            'quantidade'    => $this->quantidade,
            'data'          => $this->data


          

        ]);
        // retornar sucesso
        return true;
    }
    






}