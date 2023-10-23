<?php
class ProdutoModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    //Método para criar produto
    public function criarProduto($nome, $geracao, $tipo) {
        $sql = "INSERT INTO produto (nome, geracao, tipo) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $geracao, $tipo]);
    }

    //Model para listar produtos
    public function listarProdutos() {
        $sql = "SELECT * FROM produto";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
    //Model para atualizar produtos
    public function atualizarProdutos($id_produto, $nome, $geracao, $tipo) {
        $sql = "UPDATE produto SET nome = ?, geracao = ?, tipo = ? WHERE id_produto = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $geracao, $tipo, $id_produto]);
}
    //Model para excluir produto
    public function excluirProduto($id_produto) {
        $sql = "DELETE FROM produto WHERE id_produto = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id_produto]);
    }
}
?>