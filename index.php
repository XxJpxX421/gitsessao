<?php
require_once 'config/config.php';
require_once 'public/controllers/ProdutoController.php';

$produtoController = new ProdutoController($pdo);

//Criar produto
if (isset($_POST['nome']) && ($_POST['geracao']) && ($_POST['tipo'])) {
    $produtoController->criarProduto(
        $_POST['nome'],
        $_POST["geracao"],
        $_POST['tipo']);
        echo 'Produto Comprado!';
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Produtos</title>
</head>
<body>
    <h1>Compre já!</h1>
    <form method="post">
    <select name="nome">
            <option value="proci3">Processador Intel i3</option>
            <option value="proci5">Processador Intel i5</option>
            <option value="proci7">Processador Intel i7</option>
            <!-- Adicione mais opções conforme necessário -->
        </select><br><br>
        <select name="geracao">
            <option value="1">1º Geração</option>
            <option value="2">2º Geração</option>
            <option value="3">3º Geração</option>
            <!-- Adicione mais opções conforme necessário -->
        </select><br><br>
        <select name="tipo">
            <option value="norgb">Sem RGB</option>
            <option value="rgb">Com RGB</option>
            <!-- Adicione mais opções conforme necessário -->
        </select><br><br>
        <button type="submit">Comprar</button>
</form>
</body>
</html>