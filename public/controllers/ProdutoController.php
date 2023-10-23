<?php
require_once 'C:\xampp\htdocs\gitsessao\public\model\ProdutoModel.php';

class ProdutoController {
    private $produtoModel;

    public function __construct($pdo) {
        $this->produtoModel = new produtoModel($pdo);
    }

    public function criarProduto($nome, $geracao, $tipo) {
        $this->produtoModel->criarProduto($nome, $geracao, $tipo);
    }

        public function listarProdutos() {
        return $this->produtoModel->listarProdutos();
    }

    public function exibirListaProdutos() {
        $produtos = $this->produtoModel->listarProdutos();
        include 'views/produtos/lista.php';
    }

    public function atualizarProdutos($id_produto, $nome, $geracao, $tipo) {
        $this->produtoModel->atualizarProdutos($id_produto, $nome, $geracao, $tipo);
    }

    public function excluirProduto($id_produto) {
        $this->produtoModel->excluirProduto($id_produto);
    }
}

?>