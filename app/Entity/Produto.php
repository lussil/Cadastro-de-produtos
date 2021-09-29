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
         
    
        // metodo responsavel por excluir vaga
        public function excluir(){
            return (new Database('produtos'))->delete('id = '.$this->id);
        }


        // metodo responsavel por obter Todas as vagas do banco
        public static function getProdutos($where = null, $order = null, $limit = null){
            return (new Database('produtos'))->select($where, $order, $limit)
                                             ->fetchAll(PDO::FETCH_CLASS, self::class);
        } 


        // metodo responsavel por buscar a vaga com base no ID
        public static function getProduto($id){
        return (new Database('produtos'))->select('id = '. $id)
                                    ->fetchObject(self::class);
    }





}